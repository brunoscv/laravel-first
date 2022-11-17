<?php
/**
 * @package    Controller
 * @author     Rupert Brasil Lustosa <rupertlustosa@gmail.com>
 * @date       09/12/2019 15:43:06
 */

declare(strict_types=1);

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Api\ApiBaseController;
use App\Services\CityService;
use App\Traits\LogActivity;
use Auth;
use Exception;
use Illuminate\Http\JsonResponse;
use JsValidator;

class CityController extends ApiBaseController
{
    use LogActivity;

    private $service;
    private $label;

    public function __construct(CityService $service)
    {

        $this->service = $service;
        $this->label = 'Cidades';
    }

    public function find(): JsonResponse
    {
        try {


            $collection = $this->service->findList();
            return $this->sendResponse($collection->toArray());


        } catch (Exception $e) {

            return $this->sendError('Server Error.', $e);

        }
    }

}
