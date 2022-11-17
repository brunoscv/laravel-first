<?php


namespace App\Http\Controllers\Api;

use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Resources\UserResource;
use App\Services\UserService;
use ErrorException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Validator;

class PassportController extends ApiBaseController
{


    /**
     * Handles Login Request
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function login(Request $request)
    {

        $storeRequest = new UserStoreRequest();
        $rules = $storeRequest->rules();

        $rules = [
            'email' => 'required|email',
            'password' => str_replace('confirmed', '', $rules['password']),
        ];

        $data = $request->only(['email', 'password']);

        $validator = Validator::make($data, $rules, $storeRequest->messages());

        if ($validator->fails()) {

            return $this->sendBadRequest('Validation Error.', $validator->errors()->toArray());
        }

        if (auth()->attempt($data)) {

            $user = auth()->user();

            if (!$user->email_verified_at) {

                return $this->sendBadRequest('Validation Error.', ["email" => "Email não verificado!"]);
            }

            #$user = new UserResource(auth()->user());
            $token = auth()->user()->createToken('AppName')->accessToken;

            return response()->json([
                'user' => $user,
                'token' => $token
            ], 200);

        } else {

            #return response()->json(['error' => 'Unauthorized'], 401);
            return $this->sendBadRequest('Validation Error.', [['Usuário ou senha inválidos']]);
        }
    }


    public function register(UserService $userService)
    {
        $storeRequest = new UserStoreRequest();
        $validator = Validator::make(request()->all(), $storeRequest->rulesRegisterApi(), $storeRequest->messages());

        if ($validator->fails()) {

            return $this->sendBadRequest('Validation Error.', $validator->errors()->toArray());
        }

        $user = $userService->create(request()->all());

        // $user->sendEmailVerificationNotification();

        $userService->sendSendVerifyEmail($user);

        $token = $user->createToken('AppName')->accessToken;

        return response()->json(['token' => $token, 'user' => new UserResource($user->fresh())], 200);
    }

    public function unAuthenticated()
    {

        return $this->sendUnauthorized();
    }


    public function loginSocialFacebook()
    {
        $token = request()->get('token');
        return $this->getAuthenticatedLoginSocial($token, 'facebook');
    }

    public function loginSocialGoogle()
    {
        $token = request()->get('token');
        return $this->getAuthenticatedLoginSocial($token, 'google');
    }

    private function getAuthenticatedLoginSocial($token, $provider, $type = 'user')
    {
        try {

            switch ($type) {
                default:
                    $service = new UserService();
            }

            $user = $service->findOrNewSocialUser($token, $provider);

            $response = $service->authenticateUserInApi($user);

            return $this->sendResponse($response);

        } catch (ErrorException $e) {

            return $this->sendError('Error exception', $e);

        } catch (\Exception $e) {

            return $this->sendError('Exception', $e);
        }
    }

    public function sendTokenPasswordRecovery(Request $request): JsonResponse
    {
        try {

            $this->validate($request, (new UserUpdateRequest())->rulesForRecoveryPassword());
            $service = new UserService();
            $user = $service->findWhere(['email' => $request->get('email')])->first();

            if (!$user) {

                return $this->sendBadRequest('Validation Error.', ['generic_error' => 'Usuário não encontrado.']);
            }

            $service->sendTokenResetPassword($user);

            $dataRecovery = [
                'message' => "Enviamos para o email {$user->email} um código de verificação para a recuperação da senha",
                'generic_error' => null,
            ];

            return $this->sendResponse($dataRecovery);

        } catch (ValidationException $e) {

            $errors = $e->errors();
            $errors['generic_error'] = '';
            return $this->sendBadRequest('Validation error', $errors);

        } catch (ErrorException $e) {

            return $this->sendBadRequest('Generic error', ['generic_error' => $e->getMessage()]);

        } catch (Exception $e) {

            return $this->sendError('Server Error.', $e);
        }
    }

    public function validatedTokenConfirmationPasswordRecovery(): JsonResponse
    {
        try {

            $rules = [
                'token' => 'required',
            ];


            $validator = Validator::make(\request()->all(), $rules);

            if ($validator->fails()) {

                return $this->sendBadRequest('Validation Error.', $validator->errors()->toArray());
            }
            $service = new UserService();
            $user = $service->validateUserRecoveryPasswordToken(request()->get('token'));

            $response = $service->authenticateUserInApi($user);

            return $this->sendResponse($response);

        } catch (ValidationException $e) {

            $errors = $e->errors();
            $errors['generic_error'] = '';
            return $this->sendBadRequest('Validation error', $errors);

        } catch (ErrorException $er) {

            return $this->sendBadRequest('Validation error', ['generic_error' => $er->getMessage()]);

        } catch (Exception $e) {

            return $this->sendError('Server Error.', $e);
        }
    }


    public function emailVerify(): JsonResponse
    {
        try {

            $service = new UserService();
            $user = $service->validateUseEmailTokenVerify(request()->get('code'));

            $response = $service->authenticateUserInApi($user);

            return $this->sendResponse($response);

        } catch (ValidationException $e) {

            $errors = $e->errors();
            $errors['generic_error'] = '';
            return $this->sendBadRequest('Validation error', $errors);

        } catch (ErrorException $er) {

            return $this->sendBadRequest('Validation error', ['generic_error' => $er->getMessage()]);

        } catch (Exception $e) {

            return $this->sendError('Server Error.', $e);
        }
    }


    public function me()
    {
        return $this->sendResource(new UserResource(auth()->user()));
    }

}
