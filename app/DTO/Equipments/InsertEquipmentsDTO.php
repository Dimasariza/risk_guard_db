<?php

namespace App\DTO\Equipments;

use App\Http\Requests\Equipments\CreateEquipmentRequest;
use Illuminate\Support\Str;

class InsertEquipmentsDTO
{
    public function __construct(
        public readonly string $eq_idEquipment,
        public readonly string $eq_tagOfEquipment,
        public readonly string $eq_nameOfEquipment,
        public readonly string $eq_equipmentType,
        public readonly string $eq_itemId,
    ) {
    }

    public static function fromRequest(CreateEquipmentRequest $request): self
    {
        return new self(
            eq_idEquipment: Str::random(9),
            eq_tagOfEquipment: $request->validated('eq_tagOfEquipment'),
            eq_nameOfEquipment: $request->validated('eq_nameOfEquipment'),
            eq_equipmentType: $request->validated('eq_equipmentType'),
            eq_itemId: $request->validated('eq_itemId'),
        );
    }

    public function build(): array
    {
        return [
            'eq_idEquipment' => $this->eq_idEquipment,
            'eq_tagOfEquipment' => $this->eq_tagOfEquipment,
            'eq_nameOfEquipment' => $this->eq_nameOfEquipment,
            'eq_equipmentType' => $this->eq_equipmentType,
            'eq_itemId' => $this->eq_itemId,
        ];
    }
}
