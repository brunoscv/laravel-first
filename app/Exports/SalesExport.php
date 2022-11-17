<?php

namespace App\Exports;

use App\Models\Sale;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromView;

class SalesExport implements FromView
{

    public function view(): View
    {

        $query = Sale::select('sales.*', 'users.name as user_name', \DB::raw("date_format(sales.created_at,'%d/%m/%Y às %H:%i:%s') as created"))->orderByDesc('sales.id')

            ->join("status_sale_sales", "status_sale_sales.sale_id", "sales.id")
            ->join(DB::raw('(select max(id) as id from status_sale_sales group by sale_id) last_status'), function ($join) {
                $join->on('status_sale_sales.id', '=', 'last_status.id');
            })
            ->join('status_sales', 'status_sale_sales.status_sale_id', 'status_sales.id')
            ->join('users', 'users.id', '=', 'sales.user_id');


        $query->when(request('id'), function ($query, $id) {

            return $query->whereId($id);
        });

        if(\Auth::user()->is_dealer){

            $query =  $query->whereUserId(\Auth::user()->id)
                ->orWhere('sales.user_creator_id', '=', \Auth::user()->id);

        }else{

            $query->when(request('user_id'), function ($query, $id) {

                return $query->whereUserId($id);
            });

        }

        $query->when(request('status_sale'), function ($query, $id) {

            return $query->where('status_sales.id', '=', $id);
        });

        $query->when(request('status_payment'), function ($query, $id) {

            $query->whereHas("payments", function ($query) use ($id) {
                return $query->where('payments.status_payments_id', '=', $id);
            });
        });


        $query->when(request('start_date'), function ($query, $start_date) {

            try {

                $start_date = Carbon::createFromFormat('d/m/Y', $start_date)->format('Y-m-d');
                return $query->where('sales.created_at', '>=', $start_date . " 00:00:00");
            } catch (Exception $exception) {

                return $query;
            }
        });

        $query->when(request('end_date'), function ($query, $end_date) {

            try {

                $end_date = Carbon::createFromFormat('d/m/Y', $end_date)->format('Y-m-d');
                return $query->where('sales.created_at', '<=', $end_date . ' 23:59:59');
            } catch (Exception $exception) {

                return $query;
            }
        });


        $query->when(request('search'), function ($query, $search) {

            return $query->where('id', 'LIKE', '%' . $search . '%');
        });

        $query = $query->orderBy('sales.id')->get();

        return view('
        spreadsheet.sales', [
            'data' => $query
        ]);
    }
}
