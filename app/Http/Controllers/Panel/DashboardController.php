<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Api\ApiBaseController;
use App\Models\StatusSale;
use App\Models\Client;
use App\Models\Survey;
use App\Services\DashboardService;
use App\Services\ClientService;
use App\Services\SurveyService;
use App\Services\FFMpegService;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;
use Carbon\Carbon;

class DashboardController extends ApiBaseController
{

    private $service;
    private $label;

    public function __construct(DashboardService $service, ClientService $cliente, SurveyService $survey)
    {
        $this->service = $service;
        $this->cliente = $cliente;
        $this->survey = $survey;
        $this->label = 'Painel de Controle';
    }

    public function dashboard(): View
    {

        // $today = Carbon::now()->format('Y-m-d').'%';
        // $data = Client::where('created_at', 'like', $today)->get();


       // $this->log(__METHOD__);

        //$this->authorize('viewAny', Survey::class);

        $data = $this->survey->paginate(200);

        return view('panel.home.dashboard')
            ->with([
                'data' => $data,
                'label' => $this->label,
            ]);        
    }


    public function videos(): View
    {

        return view('panel.videos.index');
    }


    public function curva(): JsonResponse
    {

        try {

            return $this->sendResponse($this->service->curva());

        } catch (Exception $e) {

            return $this->sendError('Server Error.', $e);

        }
    }

    public function reportUserRegistrationByDay(): JsonResponse
    {

        try {

            return $this->sendResponse($this->service->usersRegistrationDay());

        } catch (Exception $e) {

            return $this->sendError('Server Error.', $e);

        }
    }

    public function reportSalesByCategory(): JsonResponse
    {

        try {

            return $this->sendResponse($this->service->salesByCategory());

        } catch (Exception $e) {

            return $this->sendError('Server Error.', $e);

        }
    }

    public function reportSalesByPaymentForm(): JsonResponse
    {

        try {

            return $this->sendResponse($this->service->salesPaymentForm());

        } catch (Exception $e) {

            return $this->sendError('Server Error.', $e);

        }
    }

    public function reportSalesByStatusPayment(): JsonResponse
    {

        try {

            return $this->sendResponse($this->service->salesStatusPayment());

        } catch (Exception $e) {

            return $this->sendError('Server Error.', $e);

        }
    }

    public function reportSalesByStatusDelivery(): JsonResponse
    {

        try {

            return $this->sendResponse($this->service->salesStatusSale(
                [
                    StatusSale::SEPARATION,
                    StatusSale::AWAITING_WITHDRAWAL,
                    StatusSale::ON_CARRIAGE,
                    StatusSale::DELIVERED,
                ]
            ));

        } catch (Exception $e) {

            return $this->sendError('Server Error.', $e);

        }
    }


    public function reportSalesByStatusSale(): JsonResponse
    {

        try {

            return $this->sendResponse($this->service->salesStatusSale());

        } catch (Exception $e) {

            return $this->sendError('Server Error.', $e);

        }
    }


    public function iframe()
    {
        Debugbar::disable();
        return view('panel.home.iframe');
    }
}
