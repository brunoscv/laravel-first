<?php
/**
 * @package    Api
 * @author     Rupert Brasil Lustosa <rupertlustosa@gmail.com>
 * @date       09/12/2019 10:25:33
 */

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Requests\ApiClientStoreRequest;
use App\Http\Requests\ApiClientUpdateRequest;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Http\Resources\UserSimpleResource;
use App\Models\User;
use App\Services\ClientService;
use App\Services\CorreiosService;
use App\Services\UserService;
use Auth;
use Exception;
use Illuminate\Http\JsonResponse;
use Validator;

class ApiUserController extends ApiBaseController
{

    private $service;

    /**
     * Create a new controller instance.
     *
     * @param UserService $service
     */
    public function __construct(UserService $service)
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

            return $this->sendPaginate(new UserCollection($data));

        } catch (Exception $e) {

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

            return $this->sendResource(UserSimpleResource::collection($data));

        } catch (Exception $e) {

            return $this->sendError('Server Error.', $e);
        }
    }


    public function allClients(ClientService $clientService): JsonResponse
    {

        try {

            $data = $clientService->all();

            return $this->sendResource(UserSimpleResource::collection($data));

        } catch (Exception $e) {

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

            return $this->sendResource(new UserResource($item));

        } catch (Exception $e) {

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

            if (!Auth::user()->can('create', User::class)) {

                return $this->sendUnauthorized();
            }

            $storeRequest = new UserStoreRequest();
            $validator = Validator::make(request()->all(), $storeRequest->rules());

            if ($validator->fails()) {

                return $this->sendBadRequest('Validation Error.', $validator->errors()->toArray());
            }

            $item = $this->service->create(request()->all());

            return $this->sendResponse($item->toArray());

        } catch (Exception $e) {

            return $this->sendError('Server Error.', $e);

        }
    }


    public function storeClient()
    {
        try {

            if (!Auth::user()->can('create', User::class)) {

                return $this->sendUnauthorized();
            }

            $storeRequest = new ApiClientStoreRequest();
            $validator = Validator::make(request()->all(), $storeRequest->rules());

            if ($validator->fails()) {

                return $this->sendBadRequest('Validation Error.', $validator->errors()->toArray());
            }

            if (request('postal_code')){

                $postal_code =  request('postal_code');
                str_replace("-", '', $postal_code);

                $address =  (new CorreiosService())->getAddressWithIbgeCode($postal_code);
                if (sizeof($address)){
                    request()->request->add(["city_id"=> $address['ibge']]);
                }
            }

            $item = (new ClientService())->create(request()->all());

            return $this->sendResponse($item->toArray());

        } catch (Exception $e) {

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

            if (!Auth::user()->can('update', User::class)) {

                return $this->sendUnauthorized();
            }

            $updateRequest = new UserUpdateRequest();
            $validator = Validator::make(request()->all(), $updateRequest->rules());

            if ($validator->fails()) {

                return $this->sendBadRequest('Validation Error.', $validator->errors()->toArray());
            }

            $item = $this->service->update(request()->all(), $item);

            return $this->sendResponse($item->toArray());

        } catch (Exception $e) {

            return $this->sendError('Server Error.', $e);

        }
    }

    public function updateClient()
    {
        try {

            $item = $this->service->find((int)request('id'));
            if ($item === null) {

                return $this->sendNotFound();
            }

            if (!Auth::user()->can('update', $item)) {

                return $this->sendUnauthorized();
            }


            $updateRequest = new ApiClientUpdateRequest();
            $validator = Validator::make(request()->all(), $updateRequest->rules());

            if ($validator->fails()) {

                return $this->sendBadRequest('Validation Error.', $validator->errors()->toArray());
            }

            $item = (new ClientService())->update(request()->all(), $item);

            return $this->sendResponse($item->toArray());

        } catch (Exception $e) {

            return $this->sendError('Server Error.', $e);

        }
    }


    public function updatePersonal()
    {
        try {

            $fields = [
                'name',
                'email',
                'rg',
                'document_number',
                'birth',
                'gender',
                'phone1',
                'phone2',
            ];

            $apiUserUpdateProfileRequest = new UserUpdateRequest();
            $allRules = $apiUserUpdateProfileRequest->rulesForApi();
            $rules = [];

            foreach ($fields as $field) {

                $rules[$field] = $allRules[$field];
            }

            $validator = Validator::make(request()->only($fields), $rules, $apiUserUpdateProfileRequest->messages());

            if ($validator->fails()) {

                return $this->sendBadRequest('Validation Error.', $validator->errors()->toArray());
            }

            $this->service->update(request()->only($fields), \Illuminate\Support\Facades\Auth::user());

            $item = Auth::user();
            return $this->sendResource(new UserResource($item));

        } catch (Exception $exception) {

            return $this->sendError('Server Error.', $exception);

        }
    }

    public function oneSignal()
    {
        try {

            $apiUserUpdateProfileRequest = new UserUpdateRequest();
            $validator = Validator::make(request()->all(), $apiUserUpdateProfileRequest->rulesForOneSignal());

            if ($validator->fails()) {

                return $this->sendBadRequest('Validation Error.', $validator->errors()->toArray());
            }
            $user =  Auth::user();
            $user->onesignal_user_id = request()->get('onesignal_user_id');
            $user->save();

            return $this->sendResource(new UserResource($user));

        } catch (Exception $exception) {

            return $this->sendError('Server Error.', $exception);
        }
    }

    public function updatePassword()
    {
        try {

            $validator = Validator::make(request()->all(), (new UserUpdateRequest())->rulesForUpdatePassword());

            if ($validator->fails()) {

                return $this->sendBadRequest('Validation Error.', $validator->errors()->toArray());
            }

            Auth::user()->onesignal_user_id = request()->get('password');
            Auth::user()->save();

            return $this->sendResource(new UserResource(Auth::user()));

        } catch (Exception $exception) {

            return $this->sendError('Server Error.', $exception);

        }
    }

    public function updateImage()
    {
        try {
            $data['image'] = upload(request('image'), 'users')['file'];

            Auth::user()->image = $data['image'];
            Auth::user()->save();

            $item = Auth::user();
            return $this->sendResource(new UserResource($item));

        } catch (Exception $exception) {

            return $this->sendError('Server Error.', $exception);

        }
    }

}
