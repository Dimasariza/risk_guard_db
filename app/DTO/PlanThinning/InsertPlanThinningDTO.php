<?php

namespace App\DTO\PlanThinning;

use App\Http\Requests\PlanThinning\CreatePlanThinningRequest;
use Illuminate\Support\Str;

class InsertPlanThinningDTO
{
    public function __construct(
        public readonly string $planThinning_componentId,
        public readonly ?string $planThinning_corrosionRate = null,
        public readonly ?string $planThinning_planDate = null,
        public readonly ?string $planThinning_tMinInch = null,
        public readonly ?string $planThinning_tMinMM = null,
        public readonly ?string $planThinning_nInspA = null,
        public readonly ?string $planThinning_nInspB = null,
        public readonly ?string $planThinning_nInspC = null,
        public readonly ?string $planThinning_nInspD = null,
        public readonly ?string $planThinning_injectionPoints = null,
        public readonly ?string $planThinning_deadLegs = null,
        public readonly ?string $planThinning_weldingConstruction = null,
        public readonly ?string $planThinning_astMaintenance = null,
        public readonly ?string $planThinning_settlement = null,
        public readonly ?string $planThinning_onlineMonitoring = null,
    ) {
    }

    public static function fromRequest(CreatePlanThinningRequest $request): self
    {
        return new self(
            planThinning_componentId: $request->validated("planThinning_componentId"),
        );
    }

    public function build(): array
    {
        return [
            "planThinning_id" => Str::random(9),
            "planThinning_componentId" => $this->planThinning_componentId,
            "planThinning_corrosionRate" => $this->planThinning_corrosionRate,
            "planThinning_planDate" => $this->planThinning_planDate,
            "planThinning_tMinInch" => $this->planThinning_tMinInch,
            "planThinning_tMinMM" => $this->planThinning_tMinMM,
            "planThinning_nInspA" => $this->planThinning_nInspA,
            "planThinning_nInspB" => $this->planThinning_nInspB,
            "planThinning_nInspC" => $this->planThinning_nInspC,
            "planThinning_nInspD" => $this->planThinning_nInspD,
            "planThinning_injectionPoints" => $this->planThinning_injectionPoints,
            "planThinning_deadLegs" => $this->planThinning_deadLegs,
            "planThinning_weldingConstruction" => $this->planThinning_weldingConstruction,
            "planThinning_astMaintenance" => $this->planThinning_astMaintenance,
            "planThinning_settlement" => $this->planThinning_settlement,
            "planThinning_onlineMonitoring" => $this->planThinning_onlineMonitoring,
        ];
    }
}
