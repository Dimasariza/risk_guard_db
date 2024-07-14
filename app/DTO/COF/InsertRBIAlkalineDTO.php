<?php

namespace App\DTO\COF;

use App\Http\Requests\RBIAlkaline\CreateRBIAlkalineRequest;
use Illuminate\Support\Str;

class InsertCOFDTO
{
    public function __construct(
        public readonly string $cof_componentId,
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
    ) {
    }

    public static function fromRequest(CreateRBIAlkalineRequest $request): self
    {
        return new self(
            cof_componentId: $request->validated("cof_componentId"),
            // rbiAlkaline_shellSusceptibility: $request->validated("rbiAlkaline_shellSusceptibility"),
            // rbiAlkaline_headSusceptibility: $request->validated("rbiAlkaline_headSusceptibility"),
            // rbiAlkaline_shellSeverityId: $request->validated("rbiAlkaline_shellSeverityId"),
            // rbiAlkaline_headSeverityId: $request->validated("rbiAlkaline_headSeverityId"),
            // rbiAlkaline_ageTimeInService: $request->validated("rbiAlkaline_ageTimeInService"),
            // rbiAlkaline_sheelSection: $request->validated("rbiAlkaline_sheelSection"),
            // rbiAlkaline_headSection: $request->validated("rbiAlkaline_headSection"),
        );
    }

    public function build(): array
    {
        return [
            'cof_id' => Str::random(9),
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
        ];
    }
}
