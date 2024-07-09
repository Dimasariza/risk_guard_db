<?php

namespace App\DTO\RBIThinning;

use App\Http\Requests\RBIThinning\CreateRBIThinningRequest;
use Illuminate\Support\Str;

class InsertRBIThinningDTO
{
    public function __construct(
        public readonly string $rbiThinning_componentId,
        public readonly ?string $rbiThinning_corrosionRate = null,
        public readonly ?string $rbiThinning_rbiDate = null,
        public readonly ?string $rbiThinning_tMinInch = null,
        public readonly ?string $rbiThinning_tMinMM = null,
        public readonly ?string $rbiThinning_nInspA = null,
        public readonly ?string $rbiThinning_nInspB = null,
        public readonly ?string $rbiThinning_nInspC = null,
        public readonly ?string $rbiThinning_nInspD = null,
        public readonly ?string $rbiThinning_injectionPoints = null,
        public readonly ?string $rbiThinning_deadLegs = null,
        public readonly ?string $rbiThinning_weldingConstruction = null,
        public readonly ?string $rbiThinning_astMaintenance = null,
        public readonly ?string $rbiThinning_settlement = null,
        public readonly ?string $rbiThinning_onlineMonitoring = null,
    ) {
    }

    public static function fromRequest(CreateRBIThinningRequest $request): self
    {
        return new self(
            rbiThinning_componentId: $request->validated("rbiThinning_componentId"),
        );
    }

    public function build(): array
    {
        return [
            "rbiThinning_id" => Str::random(9),
            "rbiThinning_componentId" => $this->rbiThinning_componentId,
            "rbiThinning_corrosionRate" => $this->rbiThinning_corrosionRate,
            "rbiThinning_rbiDate" => $this->rbiThinning_rbiDate,
            "rbiThinning_tMinInch" => $this->rbiThinning_tMinInch,
            "rbiThinning_tMinMM" => $this->rbiThinning_tMinMM,
            "rbiThinning_nInspA" => $this->rbiThinning_nInspA,
            "rbiThinning_nInspB" => $this->rbiThinning_nInspB,
            "rbiThinning_nInspC" => $this->rbiThinning_nInspC,
            "rbiThinning_nInspD" => $this->rbiThinning_nInspD,
            "rbiThinning_injectionPoints" => $this->rbiThinning_injectionPoints,
            "rbiThinning_deadLegs" => $this->rbiThinning_deadLegs,
            "rbiThinning_weldingConstruction" => $this->rbiThinning_weldingConstruction,
            "rbiThinning_astMaintenance" => $this->rbiThinning_astMaintenance,
            "rbiThinning_settlement" => $this->rbiThinning_settlement,
            "rbiThinning_onlineMonitoring" => $this->rbiThinning_onlineMonitoring,
        ];
    }
}
