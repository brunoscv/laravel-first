<?php
/**
 * @package    Rules
 * @author     Marcelo Alves Pereira <marceloalvessoft@gmail.com>
 * @date       20/07/2021 15:31:57
 */

declare(strict_types=1);

namespace App\Rules;

class PlanoRule
{

    /**
     * Validation rules that apply to the request.
     *
     * @var array
     */
	protected static $rules = [
		'id' => 'required',
        'name' => 'nullable|min:2|max:191',
        'taxa' => 'required',
        'prazo' => 'required|integer',
        'renda' => 'required',
        'settings' => 'nullable',
	];

    /**
     * Return default rules
     *
     * @return array
     */
    public static function rules()
    {

        return [
            'name' => self::$rules['name'],
            'taxa' => self::$rules['taxa'],
            'prazo' => self::$rules['prazo'],
            'renda' => self::$rules['renda'],
            'settings' => self::$rules['settings'],
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
