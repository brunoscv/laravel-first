<?php
/**
 * @package    Rules
 * @author     Rupert Brasil Lustosa <rupertlustosa@gmail.com>
 * @date       09/12/2019 10:25:33
 */

declare(strict_types=1);

namespace App\Rules;

class SurveyRule
{

    /**
     * Validation rules that apply to the request.
     *
     * @var array
     */
    protected static $rules = [
        'id' => 'required',
        'service' => 'required|min:2|max:255',
        'city' => 'required|min:2|max:255',
        'date' => 'required',
        'hour' => 'required',
        'payment' => 'required|min:2|max:255',
        'name' => 'required|min:2|max:255',
        'cpf' => 'nullable|min:2|max:18',
        'cnpj' => 'nullable|min:2|max:18',
        'phone' => 'required|min:2|max:15',
        'email' => 'required|email|unique:users,email,NULL,id,deleted_at,NULL',
        'user_creator_id' => 'nullable',
        'user_updater_id' => 'nullable',
        'user_eraser_id' => 'nullable',
    ];

    /**
     * Return default rules
     *
     * @return array
     */
    public static function rules()
    {

        return [
            'service' => self::$rules['service'],
            'city' => self::$rules['city'],
            'date' => self::$rules['date'],
            'hour' => self::$rules['hour'],
            'payment' => self::$rules['payment'],
            'name' => self::$rules['name'],
            'cpf' => self::$rules['cpf'],
            'cnpj' => self::$rules['cnpj'],
            'phone' => self::$rules['phone'],
            'email' => self::$rules['email'],
            'user_creator_id' => self::$rules['user_creator_id'],
            'user_updater_id' => self::$rules['user_updater_id'],
            'user_eraser_id' => self::$rules['user_eraser_id'],
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
