<?php
/**
 * @package    Resources
 * @author     Marcelo Alves Pereira<marceloalvessoft@gmail.com>
 * @date       20/07/2021 15:31:09
 */

declare(strict_types=1);

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClientResource extends JsonResource
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
            'nome' => $this->nome,
            'telefone' => $this->telefone,
            'email' => $this->email,
            'nascimento' => $this->nascimento,
            'renda' => $this->renda,
        ];
    }
}
