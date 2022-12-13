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
        'service'=>'required',
        'name' => 'required',
        'city' => 'required',
        'license' => 'required',
        'date' => 'required',
        'hour' => 'required',
        'payment' => 'required',
        'number_boleto' => 'nullable',
        'url_boleto' => 'nullable',
        'img_boleto' => 'nullable',
        'cpf' => 'required',
        'cnpj' => 'nullable',
        'phone' => 'nullable',
        'email' => 'nullable',
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
            'name' => self::$rules['name'],
            'city' => self::$rules['city'],
            'license' => self::$rules['license'],
            'date' => self::$rules['date'],
            'hour' => self::$rules['hour'],
            'payment' => self::$rules['payment'],
            'number_boleto' => self::$rules['number_boleto'],
            'url_boleto' => self::$rules['url_boleto'],
            'img_boleto' => self::$rules['img_boleto'],
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
