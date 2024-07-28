<?php

namespace App\Http\Resources\AssetRegister;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ItemsRegisterResources extends JsonResource
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
            "system" => EquipmentsRegisterResources::collection($this->systemByUser) 
        ];
    } 
}
