<?php
/**
 * @package    Resources
 * @author     Marcelo Alves Pereira<marceloalvessoft@gmail.com>
 * @date       20/07/2021 15:31:57
 */

declare(strict_types=1);

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PlanoResource extends JsonResource
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
            'name' => $this->name,
            'taxa' => $this->taxa,
            'prazo' => $this->prazo,
            'renda' => $this->renda,
            'settings' => $this->settings,
        ];
    }
}
