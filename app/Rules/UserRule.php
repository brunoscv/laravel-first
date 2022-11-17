<?php
/**
 * @package    Rules
 * @author     Rupert Brasil Lustosa <rupertlustosa@gmail.com>
 * @date       09/12/2019 10:25:33
 */

declare(strict_types=1);

namespace App\Rules;

class UserRule
{

    /**
     * Validation rules that apply to the request.
     *
     * @var array
     */
    protected static $rules = [
        'id' => 'required',
        'name' => 'required|min:2|max:255',
        'email' => 'required|email|unique:users,email,NULL,id,deleted_at,NULL',
        'email_verified_at' => 'nullable|date_format:d/m/Y H:i',
        'password' => 'nullable|string|min:8|confirmed',
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3072',
        'imageUpdate' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:3072',
        'document_number' => 'nullable|unique:users,document_number,NULL,id,deleted_at,NULL',
        'rg' => 'nullable|min:2|max:18',
        'gender' => 'nullable|in:MALE,FEMALE',
        'birth' => 'nullable|date_format:d/m/Y',
        'phone1' => 'nullable|min:2|max:15',
        'phone2' => 'nullable|min:2|max:15',
        'onesignal_user_id' => 'nullable|min:2|max:255',
        'remember_token' => 'nullable|min:2|max:100',
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
            'name' => self::$rules['name'],
            'email' => self::$rules['email'],
            'email_verified_at' => self::$rules['email_verified_at'],
            'password' => self::$rules['password'],
            'image' => self::$rules['image'],
            'document_number' => self::$rules['document_number'],
            'rg' => self::$rules['rg'],
            'gender' => self::$rules['gender'],
            'birth' => self::$rules['birth'],
            'phone1' => self::$rules['phone1'],
            'phone2' => self::$rules['phone2'],
            'onesignal_user_id' => self::$rules['onesignal_user_id'],
            'remember_token' => self::$rules['remember_token'],
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
