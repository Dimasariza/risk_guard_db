<?php

namespace App\DTO\Components;

use App\Http\Requests\Components\UpdateComponentRequest;

class UpdateComponentsDTO
{
    public function __construct(
        public readonly string $comp_tagOfComponent,
        public readonly string $comp_nameOfComponent,
        public readonly string $comp_componentType,
        public readonly string $comp_equipmentId
    ) {
    }

    public static function fromRequest(UpdateComponentRequest $request): self
    {
        return new self(
            comp_tagOfComponent: $request->validated('comp_tagOfComponent'),
            comp_nameOfComponent: $request->validated('comp_nameOfComponent'),
            comp_componentType: $request->validated('comp_componentType'),
            comp_equipmentId: $request->validated('comp_equipmentId')
        );
    }

    public function build(): array
    {
        $arr = [
            'comp_tagOfComponent' => $this->comp_tagOfComponent,
            'comp_nameOfComponent' => $this->comp_nameOfComponent,
            'comp_componentType' => $this->comp_componentType,
            'comp_equipmentId' => $this->comp_equipmentId,
        ];

        // if (!is_null($this->year)) {
        //     $arr['year'] = $this->year;
        // }

        return $arr;
    }
}