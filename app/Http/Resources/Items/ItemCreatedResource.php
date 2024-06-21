<?php

namespace App\Http\Resources\Items;

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
            "item_idItem" => $this->item_idItem,
            "item_tagOfItem" => $this->item_tagOfItem,
            "item_nameOfItem" => $this->item_nameOfItem
        ];
    }
}
