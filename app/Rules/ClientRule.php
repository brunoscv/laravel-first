<?php
/**
 * @package    Rules
 * @author     Marcelo Alves Pereira <marceloalvessoft@gmail.com>
 * @date       20/07/2021 15:31:09
 */

declare(strict_types=1);

namespace App\Rules;

class ClientRule
{

    /**
     * Validation rules that apply to the request.
     *
     * @var array
     */
	protected static $rules = [
		'id' => 'required',
        'nome' => 'nullable|min:2|max:191',
        'telefone' => 'nullable|min:2|max:191',
        'email' => 'nullable|email',
        'nascimento' => 'nullable|date_format:d/m/Y',
        'renda' => 'nullable|date_format:d/m/Y',
	];

    /**
     * Return default rules
     *
     * @return array
     */
    public static function rules()
    {

        return [
            'nome' => self::$rules['name'],
            'telefone' => self::$rules['phone'],
            'email' => self::$rules['email'],
            'nascimento' => self::$rules['date_birth'],
            'renda' => self::$rules['renda'],
        ];
    }

    /**
     * Return default messages
     *
     * @return array
     */
    public static function messages()
    {

        return [];
    }
}
