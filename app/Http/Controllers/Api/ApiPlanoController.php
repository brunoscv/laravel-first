<?php
/**
 * @package    Api
 * @author     Marcelo Alves Pereira <marceloalvessoft@gmail.com>
 * @date       20/07/2021 15:31:56
 */

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Requests\PlanoStoreRequest;
use App\Http\Requests\PlanoUpdateRequest;
use App\Http\Resources\PlanoCollection;
use App\Http\Resources\PlanoResource;
use App\Services\PlanoService;
use Illuminate\Http\JsonResponse;
use Validator;

class ApiPlanoController extends ApiBaseController
{

    private $service;

    /**
     * Create a new controller instance.
     *
     * @param PlanoService $service
     */
    public function __construct(PlanoService $service)
    {

        $this->service = $service;
    }

    /**
     * Paginate.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {

        try {

            $limit = (int)(request('limit') ?? 20);
            $data = $this->service->paginate($limit);

            return $this->sendPaginate(new PlanoCollection($data));

        } catch (\Exception $e) {

            return $this->sendError('Server Error.', $e);

        }
    }

    /**
     * return all.
     *
     * @return JsonResponse
     */
    public function all(): JsonResponse
    {

        try {

            $data = $this->service->all();

            return $this->sendResource(PlanoResource::collection($data));

        } catch (\Exception $e) {

            return $this->sendError('Server Error.', $e);
        }
    }

    /**
     * Find detail using id.
     *
     * @param $id
     * @return JsonResponse
     */
    public function show($id): JsonResponse
    {

        try {

            $item = $this->service->find($id);
            if ($item === null) {

                return $this->sendNotFound();
            }

            return $this->sendResource(new PlanoResource($item));

        } catch (\Exception $e) {

            return $this->sendError('Server Error.', $e);

        }
    }

    /**
     * Store.
     *
     * @return JsonResponse
     */
    public function store()
    {
        try {

            if (!\Auth::user()->can('create', Plano::class)) {

                return $this->sendUnauthorized();
            }

            $storeRequest = new PlanoStoreRequest();
            $validator = Validator::make(request()->all(), $storeRequest->rules());

            if ($validator->fails()) {

                return $this->sendBadRequest('Validation Error.', $validator->errors()->toArray());
            }

            $item = $this->service->create(request()->all());

            return $this->sendResponse($item->toArray());

        } catch (\Exception $e) {

            return $this->sendError('Server Error.', $e);

        }
    }

    /**
     * Update.
     *
     * @return JsonResponse
     */
    public function update()
    {
        try {

            $item = $this->service->find($id);
            if ($item === null) {

                return $this->sendNotFound();
            }

            if (!\Auth::user()->can('update', Plano::class)) {

                return $this->sendUnauthorized();
            }

            $updateRequest = new PlanoUpdateRequest();
            $validator = Validator::make(request()->all(), $updateRequest->rules());

            if ($validator->fails()) {

                return $this->sendBadRequest('Validation Error.', $validator->errors()->toArray());
            }

            $item = $this->service->update(request()->all(), $item);

            return $this->sendResponse($item->toArray());

        } catch (\Exception $e) {

            return $this->sendError('Server Error.', $e);

        }
    }



     /**
         * Find.
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
