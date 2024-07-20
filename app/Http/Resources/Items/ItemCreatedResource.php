<?php

namespace App\Http\Resources\Items;

use App\Http\Resources\Equipments\EquipmentCreatedResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ItemCreatedResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            ...parent::toArray($request),
            "system" => EquipmentCreatedResource::collection($this->system) 
        ];
    }
}
