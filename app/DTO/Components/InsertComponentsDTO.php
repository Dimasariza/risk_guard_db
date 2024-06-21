<?php

namespace App\DTO\Components;

use App\Http\Requests\Components\CreateComponentRequest;
use Illuminate\Support\Str;

class InsertComponentsDTO
{
    public function __construct(
        public readonly string $comp_idComponent,
        public readonly string $comp_tagOfComponent,
        public readonly string $comp_nameOfComponent,
        public readonly string $comp_componentType,
        public readonly string $comp_equipmentId,
    ) {
    }

    public static function fromRequest(CreateComponentRequest $request): self
    {
        return new self(
            comp_idComponent: Str::random(9),
            comp_tagOfComponent: $request->validated('comp_tagOfComponent'),
            comp_nameOfComponent: $request->validated('comp_nameOfComponent'),
            comp_componentType: $request->validated('comp_componentType'),
            comp_equipmentId: $request->validated('comp_equipmentId'),
        );
    }

    public function build(): array
    {
        return [
            'comp_idComponent' => $this->comp_idComponent,
            'comp_tagOfComponent' => $this->comp_tagOfComponent,
            'comp_nameOfComponent' => $this->comp_nameOfComponent,
            'comp_componentType' => $this->comp_componentType,
            'comp_equipmentId' => $this->comp_equipmentId,
        ];
    }
}
