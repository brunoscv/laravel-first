<?php
/**
 * @package    Resources
 * @author     Rupert Brasil Lustosa <rupertlustosa@gmail.com>
 * @date       09/12/2019 10:25:33
 */

declare(strict_types=1);

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            //'city_id' => $this->city_id,
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'email_verified_at' => $this->email_verified_at,
           // 'password' => $this->password,
            'image' => $this->image,
            'document_number' => $this->document_number,
            'rg' => $this->rg,
            'gender' => $this->gender,
            'birth' => $this->birth,
            'phone1' => $this->phone1,
            //'phone2' => $this->phone2,
//            'postal_code' => $this->postal_code,
//            'address' => $this->address,
//            'number' => $this->number,
//            'complement' => $this->complement,
//            'neighborhood' => $this->neighborhood,
            //'onesignal_user_id' => $this->onesignal_user_id,
           // 'is_dev' => $this->is_dev,
            'remember_token' => $this->remember_token,
        ];
    }
}
