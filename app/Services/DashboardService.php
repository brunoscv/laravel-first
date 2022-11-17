<?php
declare(strict_types=1);

namespace App\Services;

use App\Models\Attendance;
use App\Models\Dado;
use App\Models\Sale;
use App\Models\StatusPayments;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardService
{

    public function curva()
    {
        $query = Dado::selectRaw('dados.*, YEAR(created_at) as year, MONTH(created_at) as month, DAY(created_at) as day,   DATE_FORMAT(dados.created_at, "%Y-%m-%d") as mdate');

        if (request('period')) {
            $periods = explode("-", request('period'));
            $date_start = Carbon::createFromFormat('d/m/Y', trim($periods[0]))->startOfDay();
            $date_end = Carbon::createFromFormat('d/m/Y', trim($periods[1]))->endOfDay();

            $query->where("dados.created_at", ">=", $date_start);
            $query->where("dados.created_at", "<=", $date_end);
        }

        if (!request('period'))
            $query->where("dados.created_at", ">=", Carbon::now()->subWeek(1));


        return $query->get();

    }

    public function salesByCategory()
    {
        if (\Auth::user()->is_dealer) {
            abort(404);
        }

        $query = Sale::selectRaw('count(sales.id) as count, categories.name as name')
            ->join("sale_items", "sale_items.sale_id", "sales.id")
            ->join("products", "sale_items.product_id", "products.id")
            ->join("categories", "products.category_id", "categories.id");

        $query->whereHas("payments", function ($query) {
            return $query->where('payments.status_payments_id', '=', StatusPayments::PAID);
        });

        if (request('period')) {
            $periods = explode("-", request('period'));
            $date_start = Carbon::createFromFormat('d/m/Y', trim($periods[0]))->startOfDay();
            $date_end = Carbon::createFromFormat('d/m/Y', trim($periods[1]))->endOfDay();

            $query->where("sales.created_at", ">=", $date_start);
            $query->where("sales.created_at", "<=", $date_end);
        }

        $collection = $query->groupBy('category_id')->orderBy('count', 'DESC')->get();

        $total = $collection->reduce(function ($total, $item) {
            return $total + $item->count;
        });

        $formated = $collection->map(function ($item, $key) use ($total) {
            $item->y = $item->count / $total * 100;
            return $item;
        });


        return $formated->all();

    }

    public function usersRegistrationDay()
    {
        if (\Auth::user()->is_dealer) {
            abort(404);
        }

        $query = User::selectRaw('count(users.id) AS count, DATE_FORMAT(users.created_at, "%Y-%m-%d") as mdate');

        if (request('period')) {
            $periods = explode("-", request('period'));
            $date_start = Carbon::createFromFormat('d/m/Y', trim($periods[0]))->startOfDay();
            $date_end = Carbon::createFromFormat('d/m/Y', trim($periods[1]))->endOfDay();

            $query->where("users.created_at", ">=", $date_start);
            $query->where("users.created_at", "<=", $date_end);
        }

        if (!request('period'))
            $query->where("users.created_at", ">=", Carbon::now()->subWeek(1));

        $data = $query->groupBy('mdate')->orderBy('mdate')->get();


        return $this->formatPayloadChartFromDate($data);
    }


    public function salesPaymentForm()
    {
        if (\Auth::user()->is_dealer) {
            abort(404);
        }

        $query = Sale::selectRaw('count(sales.id) as count, payment_forms.name as name')
            ->join("payments", "payments.sale_id", "sales.id")
            ->join("payment_forms", "payments.payment_form_id", "payment_forms.id");

        $query->whereHas("payments", function ($query) {
            return $query->where('payments.status_payments_id', '=', StatusPayments::PAID);
        });

        if (request('period')) {
            $periods = explode("-", request('period'));
            $date_start = Carbon::createFromFormat('d/m/Y', trim($periods[0]))->startOfDay();
            $date_end = Carbon::createFromFormat('d/m/Y', trim($periods[1]))->endOfDay();

            $query->where("sales.created_at", ">=", $date_start);
            $query->where("sales.created_at", "<=", $date_end);
        }

        $collection = $query->groupBy('payment_form_id')->orderBy('count', 'DESC')->get();

        $total = $collection->reduce(function ($total, $item) {
            return $total + $item->count;
        });

        $formated = $collection->map(function ($item, $key) use ($total) {
            $item->y = $item->count / $total * 100;
            return $item;
        });


        return $formated->all();
    }


    public function salesStatusPayment()
    {
        if (\Auth::user()->is_dealer) {
            abort(404);
        }

        $query = Sale::selectRaw('count(sales.id) as count, status_payments.name as name')
            ->join("payments", "payments.sale_id", "sales.id")
            ->join("status_payments", "payments.status_payments_id", "status_payments.id");


        if (request('period')) {
            $periods = explode("-", request('period'));
            $date_start = Carbon::createFromFormat('d/m/Y', trim($periods[0]))->startOfDay();
            $date_end = Carbon::createFromFormat('d/m/Y', trim($periods[1]))->endOfDay();

            $query->where("sales.created_at", ">=", $date_start);
            $query->where("sales.created_at", "<=", $date_end);
        }

        $collection = $query->groupBy('status_payments_id')->orderBy('count', 'DESC')->get();

        $total = $collection->reduce(function ($total, $item) {
            return $total + $item->count;
        });

        $formated = $collection->map(function ($item, $key) use ($total) {
            $item->y = $item->count / $total * 100;
            return $item;
        });


        return $formated->all();
    }


    public function salesStatusSale($status = [])
    {
        if (\Auth::user()->is_dealer) {
            abort(404);
        }

        $query = Sale::selectRaw('count(sales.id) as count, status_sales.name as name')
            ->join("status_sale_sales", "status_sale_sales.sale_id", "sales.id")
            ->join(DB::raw('(select max(id) as id from status_sale_sales group by sale_id) last_status'), function ($join) {
                $join->on('status_sale_sales.id', '=', 'last_status.id');
            })
            ->join('status_sales', 'status_sale_sales.status_sale_id', 'status_sales.id');

        if (sizeof($status)) {
            $query->whereIn("status_sales.id", $status);
        }


        if (request('period')) {
            $periods = explode("-", request('period'));
            $date_start = Carbon::createFromFormat('d/m/Y', trim($periods[0]))->startOfDay();
            $date_end = Carbon::createFromFormat('d/m/Y', trim($periods[1]))->endOfDay();

            $query->where("sales.created_at", ">=", $date_start);
            $query->where("sales.created_at", "<=", $date_end);
        }

        $collection = $query->groupBy('status_sale_id')->orderBy('count', 'DESC')->get();

        $total = $collection->reduce(function ($total, $item) {
            return $total + $item->count;
        });

        $formated = $collection->map(function ($item, $key) use ($total) {
            $item->y = $item->count / $total * 100;
            return $item;
        });


        return $formated->all();
    }

    private function formatPayloadChartFromDate(object $data)
    {


        $modelsDay = array();
        if ($data) {
            foreach ($data as $model) {
                if (isset($model->mdate) && isset($model->count)) {
                    $date = Carbon::createFromFormat('Y-m-d', $model->mdate);
                    $obj = new \stdClass();
                    $obj->day = $date->day;
                    $obj->month = $date->month;
                    $obj->year = $date->year;
                    $obj->count = $model->count;
                    $modelsDay[] = $obj;
                }
            }
        }

        return $modelsDay;
    }


}
