<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Api\ApiBaseController;
use App\Http\Requests\ProfileStoreRequest;
use App\Models\Type;
use App\Models\User;
use App\Models\UserType;
use App\Services\ProfileService;
use App\Traits\LogActivity;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;
use JsValidator;

class ProfileController extends ApiBaseController
{
    use LogActivity;

    private $service;
    private $label;

    /**
     * @var string
     */

    public function __construct(ProfileService $service)
    {

        $this->service = $service;
        $this->label = 'Perfis';
    }

    public function index(User $user): View
    {
        $this->log(__METHOD__);

        $this->authorize('viewAny', User::class);

        $data = $this->service->paginateByUser(20, $user);

        $validatorRequest = new ProfileStoreRequest();
        $validator = JsValidator::make($validatorRequest->rules(), $validatorRequest->messages());

        return view('panel.administrators.profiles')
            ->with([
                'data' => $data,
                'label' => $this->label,
                'user' => $user,
                'validator' => $validator,
            ]);
    }

    public function store(ProfileStoreRequest $profileStoreRequest, User $user)
    {

        $this->log(__METHOD__);

        $this->service->create($profileStoreRequest->all(), $user);

        return redirect()->route('administrators.profiles', [$user->id])
            ->with([
                'message' => 'Perfil adicionado com sucesso',
                'messageType' => 's',
            ]);
    }

    public function destroy(User $user, UserType $profile): JsonResponse
    {

        $this->log(__METHOD__);

        try {

//            if ($profile->type_id == Type::ALUNO) {
//                throw new Exception("Você não pode remover este perfil");
//            }

            if (!$this->service->delete($profile)) {
                throw new Exception("Não foi possivel remover este registro");
            }

            return $this->sendResponse([]);

        } catch (Exception $exception) {

            return $this->sendError('Server Error.', $exception);
        }
    }

    public function toggleActive(UserType $profile): JsonResponse
    {

        $this->log(__METHOD__);

        try {

            $this->service->toggleActive($profile);

            return $this->sendResponse([]);

        } catch (Exception $exception) {

            return $this->sendError('Server Error.', $exception);
        }
    }


}
