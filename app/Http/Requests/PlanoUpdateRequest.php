<?php
/**
 * @package    Requests
 * @author     Marcelo Alves Pereira <marceloalvessoft@gmail.com>
 * @date       20/07/2021 15:31:57
 */

declare(strict_types=1);

namespace App\Http\Requests;

use App\Rules\PlanoRule;
use Illuminate\Foundation\Http\FormRequest;

class PlanoUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {

        return $this->user()->can('update', $this->plano);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return PlanoRule::rules();
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {

        return PlanoRule::messages();
    }
}
