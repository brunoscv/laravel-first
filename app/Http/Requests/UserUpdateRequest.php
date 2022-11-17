<?php
/**
 * @package    Requests
 * @author     Rupert Brasil Lustosa <rupertlustosa@gmail.com>
 * @date       09/12/2019 10:25:33
 */

declare(strict_types=1);

namespace App\Http\Requests;

use App\Rules\UserRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UserUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {

        return $this->user()->can('update', $this->user);
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

    public function rulesForRecoveryPassword()
    {

        $rules['email'] = 'required|email';

        return $rules;
    }

    public function rulesForApi()
    {

        $rules = UserRule::rules();
        $rules['password'] = str_replace('required', 'nullable', $rules['password']);
        $rules['birth'] = str_replace('date_format:d/m/Y', 'date_format:Y-m-d', $rules['birth']);
        $rules['email'] = 'required|email|max:255|unique:users,email,' . Auth::id();
        $rules['document_number'] = 'required|max:255|unique:users,document_number,' . Auth::id();

        return $rules;
    }

    public function rulesForUpdatePassword()
    {
        $rulesDefault = UserRule::rules();

        $rulesToUpdate['password'] = str_replace('confirmed', '', $rulesDefault['password']);
        $rulesToUpdate['password_confirmation'] = 'required|same:password';

        return $rulesToUpdate;
    }
}
