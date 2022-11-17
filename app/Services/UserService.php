<?php
/**
 * @package    Services
 * @author     Marcelo Alves Pereira <marceloalvessoft@gmail.com>
 * @date       09/12/2019 10:25:33
 */

declare(strict_types=1);

namespace App\Services;

use App\Http\Resources\UserResource;
use App\Models\Address;
use App\Models\SocialAccount;
use App\Models\Type;
use App\Models\User;
use App\Notifications\SendUserEmailVerify;
use App\Notifications\SendUserResetToken;
use App\Notifications\SendUserValidateToken;
use Auth;
use Carbon\Carbon;
use ErrorException;
use http\Exception;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class UserService
{

    public function paginate($limit): LengthAwarePaginator
    {

        return $this->buildQuery()->paginate($limit);
    }

    private function buildQuery(): Builder
    {

        $query = User::query();

        $query->when(request('id'), function ($query, $id) {

            return $query->whereId($id);
        });

        if (request('name')) {
            $query->when("name", function ($query) {
                return $query->where('name', 'LIKE', '%' . request('name') . '%');
            });
        }


        if (request('email')) {
            $query->when("email", function ($query) {
                return $query->where('email', '=', request('email'));
            });
        }

        if (request('type')) {
            $query->whereHas("types", function ($query) {
                return $query->where('types.id', '=', request('type'));
            });
        }

        return $query;
    }

    public function paginateUserByType($limit, $type, $operator = '='): LengthAwarePaginator
    {

        return $this->buildQuery()->whereHas('types', function ($query) use ($type, $operator) {
            $operator = strtolower($operator);
            switch ($operator) {
                case '=':
                    return $query->where('types.id', '=', $type);
                case 'in':
                    return $query->whereIn('types.id', $type);
                case 'not in':
                    return $query->whereNotIn('types.id', is_array($type) ? $type : [$type]);
            }

        })->orderBy('id', "desc")->paginate($limit);
    }

    public function all(): Collection
    {

        return $this->buildQuery()->get();
    }

    public function find($id)
    {

        //return Cache::remember('User_find_' . $id, config('cache.cache_time'), function () use ($id) {
        return User::find($id);
        //});
    }

    public function create($data): User
    {

        return DB::transaction(function () use ($data) {


            $data['image'] = uploadWithCrop('image', 'administrators');

            $model = new User();
            $model->fill($data);
            $model->user_creator_id = Auth::id();
            $model->user_updater_id = Auth::id();

            if (!empty($data["password"])) {
                $model->password = Hash::make($data["password"]);
            }
            $model->save();

            $roles = isset($data['type']) ? array_merge([$data["type"]], [Type::CLIENTE]) :  [Type::CLIENTE];

            $model->types()->attach($roles);

            return $model;
        });
    }

    public function update($data, User $model): User
    {

        if (!empty($data["password"])) {
            $model->password = Hash::make($data["password"]);
        }

        $image = uploadWithCrop('image', 'administrators');

        if ($image !== null) {

            $data['image'] = $image;
        } elseif (request('delete_image')) {

            $data['image'] = null;
        }
        $model->fill($data);
        $model->user_updater_id = Auth::id();
        $model->save();

        if (isset($data["postal_code"])) {
            $data["user_id"] = $model->id;
            $addressService = new AddressService();
            $address = $model->address;
            $addressService->update($data, $address ? $address : new Address());
        }

        return $model;

    }

    public function delete(User $model)
    {
        #$model->user_eraser_id = \Auth::id();
        $model->save();

        return $model->delete();
    }

    public function lists(): array
    {
        //return Cache::remember('User_lists', config('cache.cache_time'), function () {

        return User::orderBy('name')
            ->pluck('name', 'id')
            ->toArray();
        //});
    }

    public function profileUpdate($data, User $model): User
    {

        if (!empty($data["password"])) {
            $model->password = Hash::make($data["password"]);
        }

        $image = uploadWithCrop('image', 'users');

        if ($image !== null) {
            $data['image'] = $image;
        } elseif (request('delete_image')) {

            $data['image'] = null;
        }

        $model->fill($data);
        $model->save();

        return $model;
    }

    public function validateLoginByCpfOrEmail($documentNumber)
    {
        if (filter_var($documentNumber, FILTER_VALIDATE_EMAIL)) {

            $user = User::where("email", "=", $documentNumber)->first();

        } else {
            $documentNumber = formatDocumentNumber($documentNumber);

            if (!$documentNumber) {
                throw new ModelNotFoundException('Formato do CPF Inválido.');
            }

            $user = User::where("document_number", "=", $documentNumber)->first();
        }

        if (!$user) {
            throw new ModelNotFoundException('Usuário não encontrado.');
        }


        return $user;
    }

    public
    function findOrNewSocialUser($token, $provider): User
    {
        if (!$token) {
            throw new ErrorException('Token obrigatório', 404);
        }

        $socialAccount = SocialAccount::where('provider_user_id', '=', $token)->first();


        if ($socialAccount) {

            $user = $this->find($socialAccount->user_id);

        } else {

            $socialUserData = $this->getAuthSocialData($token, $provider);

            $user = User::where('email', '=', $socialUserData->getEmail())->first();

            if (!$user) {

                $user = $this->create([
                    'name' => $socialUserData->getName(),
                    'email' => $socialUserData->getEmail(),
                    'document_number' => '',
                ]);

                $user->email_verified_at =  Carbon::now();
                $user->save();
            }

            SocialAccount::create([
                'user_id' => $user->id,
                'provider_user_id' => $socialUserData->getId(),
                'provider' => $provider,
            ]);
        }

        return $user;
    }

    /**
     * @param $token
     * @param $provider [facebook, google]
     * @return
     * @throws ErrorException
     */
    public
    function getAuthSocialData($token, $provider) #: Socialite
    {
        if (!$token) {
            throw new ErrorException('token não informado', 401);
        }


        $socialAuthUserDetails = Socialite::driver($provider)->userFromToken($token);

        if (!$socialAuthUserDetails) {
            throw new ErrorException('Dados não encontrados', 404);
        }

        return $socialAuthUserDetails;
    }


    public
    function authenticateUserInApi($user)
    {
        #Auth::login($user)
        \Illuminate\Support\Facades\Auth::loginUsingId($user->id);

        $user = Auth::user();

        $token = $user->createToken('AppName')->accessToken;

        #return response()->json([
        return [
            'user' => new UserResource($user),
            'token' => $token,
            'generic_error' => null,
        ];
    }

    public function findWhere($data)
    {
        return User::where($data)->get();
    }

    public function sendTokenResetPassword(User $user)
    {
        $code = $this->generateTokenResetPassword($user);

        //EMAIL
        if (!empty($user->email)) {
            try {
                $user->notify(new SendUserResetToken($user, $code));
            } catch (Exception $e) {

            }
        }
    }

    public
    function generateTokenResetPassword(User $user): string
    {
        $code = $this->generateToken();

        $user->token_reset_password = $code;
        $user->save();

        return (string)$code;
    }

    public
    function generateToken(): string
    {
        $code = str_pad((string)mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);

        if (User::where('token_reset_password', '=', $code)->count()) {

            $code = $this->generateToken();
        }

        return (string)$code;
    }

    public
    function validateTokenRecoveryPassword($token): User
    {
        if (empty($token)) {
            throw new ErrorException('Token obrigatório');
        }

        $user = User::where(['token_reset_password' => $token])->get()->first();

        if (!$user) {
            throw new ErrorException('Token não encontrado ou inválido');
        }

        return $user;
    }

    public
    function validateUserRecoveryPasswordToken($token): User
    {
        $user = $this->validateTokenRecoveryPassword($token);
        $user->token_reset_password = null;
        $user->password = Hash::make(request()->get('password'));
        $user->save();

        return $user;
    }


    public
    function validateUseEmailTokenVerify($token): User
    {
        $user = $this->validateTokenEmail($token);

        $user->token_verify = null;
        $user->email_verified_at = Carbon::now();
        $user->save();

        return $user;
    }

    public
    function validateTokenEmail($token): User
    {
        if (empty($token)) {
            throw new ErrorException('Código de verificação é obrigatório');
        }

        $user = User::where(['token_verify' => $token])->get()->first();

        if (!$user) {
            throw new ErrorException('Código de verificação não encontrado ou inválido');
        }

        return $user;
    }


    public function sendSendVerifyEmail(User $user)
    {
        $code = (string) $this->generateToken();

        $user->token_verify = $code;
        $user->save();

        //EMAIL
        if (!empty($user->email)) {
            try {
                $user->notify(new SendUserEmailVerify($user, $code));
            } catch (Exception $e) {

            }
        }
    }


}
