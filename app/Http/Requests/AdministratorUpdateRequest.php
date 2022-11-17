<?php
/**
 * @package    Requests
 * @author     Rupert Brasil Lustosa <rupertlustosa@gmail.com>
 * @date       09/12/2019 10:25:33
 */

declare(strict_types=1);

namespace App\Http\Requests;

use App\Models\User;
use App\Rules\AddressRule;
use App\Rules\UserRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AdministratorUpdateRequest extends FormRequest
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
        $rules = UserRule::rules();
        $params = request()->route()->parameters();
        $rules['password'] = str_replace('required', 'nullable', $rules['password']);
        $rules['image'] = str_replace('required', 'nullable', $rules['image']);
        $rules['email'] = [
            'required',
            'email',
            Rule::unique('users')->ignore($params["administrator"]->id),
        ];

        $rules['document_number'] = [
            'required',
            Rule::unique('users')->ignore($params["administrator"]->id),
        ];


        return $rules;
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
}
