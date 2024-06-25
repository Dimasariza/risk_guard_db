<?php

namespace App\DTO\Equipments;

use App\Http\Requests\Equipments\CreateEquipmentRequest;
use Illuminate\Support\Str;

class InsertEquipmentsDTO
{
    public function __construct(
        public readonly string $eq_id,
        public readonly string $eq_tagOfEquipment,
        public readonly string $eq_nameOfEquipment,
        public readonly string $eq_equipmentType,
        public readonly string $eq_itemId,
        public readonly string $eq_userId,
    ) {
    }

    public static function fromRequest(CreateEquipmentRequest $request): self
    {
        return new self(
            eq_id: Str::random(9),
            eq_tagOfEquipment: $request->validated('eq_tagOfEquipment'),
            eq_nameOfEquipment: $request->validated('eq_nameOfEquipment'),
            eq_equipmentType: $request->validated('eq_equipmentType'),
            eq_itemId: $request->validated('eq_itemId'),
            eq_userId: $request->validated('eq_userId'),
        );
    }

    public function build(): array
    {
        return [
            'eq_id' => $this->eq_id,
            'eq_tagOfEquipment' => $this->eq_tagOfEquipment,
            'eq_nameOfEquipment' => $this->eq_nameOfEquipment,
            'eq_equipmentType' => $this->eq_equipmentType,
            'eq_itemId' => $this->eq_itemId,
            'eq_userId' => $this->eq_userId,
        ];
    }
}
