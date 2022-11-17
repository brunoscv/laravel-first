<?php
/**
 * @package    Requests
 * @author     Rupert Brasil Lustosa <rupertlustosa@gmail.com>
 * @date       16/07/2019 13:37:05
 */

declare(strict_types=1);

namespace App\Http\Requests;

use App\Rules\UserRule;
use Auth;
use Illuminate\Foundation\Http\FormRequest;

class UserUpdateProfile extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
        //return $this->user()->can('updateProfile', Auth::user());
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        $rules = UserRule::rules();

        $myRules = [];

        $myRules['name'] = $rules['name'];
        $myRules['image'] = 'nullable|' . $rules['image'];
        $myRules['email'] = 'nullable|unique:users,email, ' . Auth::id();
        $myRules['document_number'] = 'nullable|formato_cpf|cpf|unique:users,document_number,'. Auth::id();
        $myRules['password'] = 'nullable|' . $rules['password'];
        $myRules['phone1'] = $rules['phone1'];



        return $myRules;
    }

    public function rulesFrontUpdate()
    {

        $rules = UserRule::rules();

        $myRules = [];
        $myRules['name'] = $rules['name'];
        $myRules['image'] = 'nullable|' . $rules['image'];
        $myRules['email'] = 'nullable|unique:users,email,'. Auth::id();
        $myRules['document_number'] = 'nullable|formato_cpf|cpf|unique:users,document_number,'. Auth::id();
        $myRules['password'] = 'nullable|' . $rules['password'];
        $myRules['phone1'] = $rules['phone1'];

        return $myRules;
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
