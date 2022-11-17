<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Requests\ResponsibleStoreRequest;
use App\Models\Responsible;
use App\Services\CityService;
use App\Services\ResponsibleService;
use Exception;
use Illuminate\Http\JsonResponse;
use Validator;

class ApiCityController extends ApiBaseController
{

    private $service;

    /**
     * Create a new controller instance.
     *
     * @param City $service
     */
    public function __construct(CityService $service)
    {

        //->middleware('auth');
        $this->service = $service;
    }


    /**
     * Store.
     *
     * @return JsonResponse
     */
    public function find()
    {
        try {


            return $this->service->findList();

        } catch (Exception $e) {

            return $this->sendError('Server Error.', $e);

        }
    }
}


