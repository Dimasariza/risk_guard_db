<?php

namespace App\DTO\COF;

use App\Http\Requests\COF\CreateCOFRequest;
use Illuminate\Support\Str;

class InsertCOFDTO
{
    public function __construct(
        public readonly string $cof_componentId,
        public readonly ?string $cof_massComponent = null,
        public readonly ?string $cof_massInventory = null,
        public readonly ?string $cof_representativeFluid = null,
        public readonly ?string $cof_phaseOfFluid = null,
        public readonly ?string $cof_releaseHoleSizeD1 = "6.4",
        public readonly ?string $cof_releaseHoleSizeD2 = "25",
        public readonly ?string $cof_releaseHoleSizeD3 = "102",
        public readonly ?string $cof_releaseHoleSizeD4 = "16",
        public readonly ?string $cof_liquidInventories = null,
        public readonly ?string $cof_detectionSystem = null,
        public readonly ?string $cof_isolationSystem = null,
        public readonly ?string $cof_flamableCons = null,
        public readonly ?string $cof_damageCons = null,
        public readonly ?string $cof_adjToFlamable = null,
    ) {
    }

    public static function fromRequest(CreateCOFRequest $request): self
    {
        return new self(
            cof_componentId: $request->validated("cof_componentId"),
        );
    }

    public function build(): array
    {
        return [
            "cof_id" => Str::random(9),
            "cof_componentId" => $this->cof_componentId,
            "cof_massComponent" => $this->cof_massComponent,
            "cof_massInventory" => $this->cof_massInventory,
            "cof_representativeFluid" => $this->cof_representativeFluid,
            "cof_phaseOfFluid" => $this->cof_phaseOfFluid,
            "cof_releaseHoleSizeD1" => $this->cof_releaseHoleSizeD1,
            "cof_releaseHoleSizeD2" => $this->cof_releaseHoleSizeD2,
            "cof_releaseHoleSizeD3" => $this->cof_releaseHoleSizeD3,
            "cof_releaseHoleSizeD4" => $this->cof_releaseHoleSizeD4,
            "cof_liquidInventories" => $this->cof_liquidInventories,
            "cof_detectionSystem" => $this->cof_detectionSystem,
            "cof_isolationSystem" => $this->cof_isolationSystem,
            "cof_flamableCons" => $this->cof_flamableCons,
            "cof_damageCons" => $this->cof_damageCons,
            "cof_adjToFlamable" => $this->cof_adjToFlamable,
        ];
    }
}
