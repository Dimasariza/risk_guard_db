<?php

namespace App\DTO\COF;

use App\Http\Requests\COF\UpdateCOFRequest;

class UpdateCOFDTO
{
    public function __construct(
        public readonly ?string $cof_massComponent = null,
        public readonly ?string $cof_massInventory = null,
        public readonly ?string $cof_representativeFluid = null,
        public readonly ?string $cof_phaseOfFluid = null,
        public readonly ?string $cof_releaseHoleSizeD1 = null,
        public readonly ?string $cof_releaseHoleSizeD2 = null,
        public readonly ?string $cof_releaseHoleSizeD3 = null,
        public readonly ?string $cof_releaseHoleSizeD4 = null,
        public readonly ?string $cof_liquidInventories = null,
        public readonly ?string $cof_detectionSystem = null,
        public readonly ?string $cof_isolationSystem = null,
        public readonly ?string $cof_flamableCons = null,
        public readonly ?string $cof_damageCons = null,
        public readonly ?string $cof_adjToFlamable = null,
    ) {
    }

    public static function fromRequest(UpdateCOFRequest $request): self
    {
        return new self(
            cof_massComponent: $request->validated("cof_massComponent"),
            cof_massInventory: $request->validated("cof_massInventory"),
            cof_representativeFluid: $request->validated("cof_representativeFluid"),
            cof_phaseOfFluid: $request->validated("cof_phaseOfFluid"),
            cof_releaseHoleSizeD1: $request->validated("cof_releaseHoleSizeD1"),
            cof_releaseHoleSizeD2: $request->validated("cof_releaseHoleSizeD2"),
            cof_releaseHoleSizeD3: $request->validated("cof_releaseHoleSizeD3"),
            cof_releaseHoleSizeD4: $request->validated("cof_releaseHoleSizeD4"),
            cof_liquidInventories: $request->validated("cof_liquidInventories"),
            cof_detectionSystem: $request->validated("cof_detectionSystem"),
            cof_isolationSystem: $request->validated("cof_isolationSystem"),
            cof_flamableCons: $request->validated("cof_flamableCons"),
            cof_damageCons: $request->validated("cof_damageCons"),
            cof_adjToFlamable: $request->validated("cof_adjToFlamable"),
        );
    }

    public function build(): array
    {
        $arr = [
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

        // if (!is_null($this->year)) {
        //     $arr['year'] = $this->year;
        // }

        return $arr;
    }
}
