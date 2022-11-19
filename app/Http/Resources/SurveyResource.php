<?php
/**
 * @package    Resources
 * @author     Marcelo Alves Pereira<marceloalvessoft@gmail.com>
 * @date       20/07/2021 15:31:09
 */

declare(strict_types=1);

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SurveyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'service' => $this->service,
            'city' => $this->city,
            'date' => $this->date,
            'hour' => $this->hour,
            'payment' => $this->payment,
            'name' => $this->name,
            'cpf' => $this->cpf,
            'cnpj' => $this->cnpj,
            'phone' => $this->phone,
            'email' => $this->email,
        ];
    }
}
