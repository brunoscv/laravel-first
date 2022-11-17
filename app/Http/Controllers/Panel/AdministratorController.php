<?php
/**
 * @package    Controller
 * @author     Rupert Brasil Lustosa <rupertlustosa@gmail.com>
 * @date       09/12/2019 10:25:33
 */

declare(strict_types=1);

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Api\ApiBaseController;
use App\Http\Requests\AdministratorStoreRequest;
use App\Http\Requests\AdministratorUpdateRequest;
use App\Http\Requests\UserProfileRequest;
use App\Models\Type;
use App\Models\User;
use App\Services\UserService;
use App\Traits\ImageCrop;
use App\Traits\LogActivity;
use Auth;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use JsValidator;

class AdministratorController extends ApiBaseController
{
    use LogActivity, ImageCrop;

    private $service;
    private $label;

    private $cropModule;

    public function __construct(UserService $service)
    {

        $this->service = $service;
        $this->label = 'Administradores';
        $this->cropModule = "administrators";
    }

    public function index(): View
    {

        $this->log(__METHOD__);

        $this->authorize('viewAny', User::class);


        $data = $this->service->paginateUserByType(20, [Type::ADMIN], 'in');

        return view('panel.administrators.index')
            ->with([
                'data' => $data,
                'label' => $this->label,
            ]);
    }

    public function create(): View
    {

        $this->log(__METHOD__);

        $this->authorize('create', User::class);

        $validatorRequest = new AdministratorStoreRequest();
        $validator = JsValidator::make($validatorRequest->rules(), $validatorRequest->messages());

        return view('panel.administrators.form')
            ->with([
                'validator' => $validator,
                'label' => $this->label,
            ]);
    }

    public function store(AdministratorStoreRequest $administratorStoreRequest)
    {
        $this->log(__METHOD__);

        $this->service->create($administratorStoreRequest->all());

        return redirect()->route('administrators.' . request('routeTo'))
            ->with([
                'message' => 'Criado com sucesso',
                'messageType' => 's',
            ]);
    }

    public function edit(User $administrator): View
    {

        $this->log(__METHOD__);

        $this->authorize('update', $administrator);

        $validatorRequest = new AdministratorUpdateRequest();
        $validator = JsValidator::make($validatorRequest->rules(), $validatorRequest->messages());

        return view('panel.administrators.form')
            ->with([
                'item' => $administrator,
                'label' => $this->label,
                'validator' => $validator,
            ]);
    }

    public function update(AdministratorUpdateRequest $request, User $administrator): RedirectResponse
    {

        $this->log(__METHOD__);

        $this->service->update($request->all(), $administrator);

        return redirect()->route('administrators.index')
            ->with([
                'message' => 'Atualizado com sucesso',
                'messageType' => 's',
            ]);
    }

    public function destroy(User $administrator): JsonResponse
    {

        $this->log(__METHOD__);

        try {

            if (!Auth::user()->can('delete', $administrator)) {

                return $this->sendUnauthorized();
            }

            $this->service->delete($administrator);

            return $this->sendResponse([]);

        } catch (Exception $exception) {

            return $this->sendError('Server Error.', $exception);
        }
    }

    public function show(User $administrator): JsonResponse
    {

        $this->log(__METHOD__);
        $this->authorize('update', $administrator);

        return response()->json($administrator, 200, [], JSON_PRETTY_PRINT);
    }

    public function profile(): View
    {
        $this->log(__METHOD__);

        $user = \Illuminate\Support\Facades\Auth::user();
        $this->authorize('profile', $user);

        $validatorRequest = new UserProfileRequest();
        $validator = JsValidator::make($validatorRequest->rules(), $validatorRequest->messages());

        return view('panel.administrators.profile.form')
            ->with([
                'item' => $user,
                'label' => $this->label,
                'validator' => $validator,
            ]);
    }

    public function profileUpdate(UserProfileRequest $request): RedirectResponse
    {

        $this->log(__METHOD__);
        $user = Auth::user();

        $this->service->profileUpdate($request->all(), $user);

        return redirect()->route('administrators.profile')
            ->with([
                'message' => 'Atualizado com sucesso',
                'messageType' => 's',
            ]);
    }
}
