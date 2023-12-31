<?php
/**
 * @package    Requests
 * @author     Rupert Brasil Lustosa <rupertlustosa@gmail.com>
 * @date       09/12/2019 10:25:33
 */

declare(strict_types=1);

namespace App\Http\Requests;

use App\Models\User;
use App\Rules\UserRule;
use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {

        return $this->user()->can('create', User::class);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return UserRule::rules();
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {

        return UserRule::messages();
    }

    public function rulesRegisterApi()
    {

        $rules = UserRule::rules();

        return [
            'name' => $rules['name'],
            'email' => $rules['email'],
            'password' => $rules['password'],
            'document_number' => $rules['document_number'],
            'gender' => $rules['gender'],
            'birth' => $rules['birth'],
            'phone1' => $rules['phone1'],
        ];

    }
}
