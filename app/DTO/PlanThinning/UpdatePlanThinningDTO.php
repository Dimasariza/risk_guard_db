<?php

namespace App\DTO\PlanThinning;

use App\Http\Requests\PlanThinning\UpdatePlanThinningRequest;

class UpdatePlanThinningDTO
{
    public function __construct(
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

    public static function fromRequest(UpdatePlanThinningRequest $request): self
    {
        return new self(
            planThinning_corrosionRate: $request->validated("planThinning_corrosionRate"),
            planThinning_planDate: $request->validated("planThinning_planDate"),
            planThinning_tMinInch: $request->validated("planThinning_tMinInch"),
            planThinning_tMinMM: $request->validated("planThinning_tMinMM"),
            planThinning_nInspA: $request->validated("planThinning_nInspA"),
            planThinning_nInspB: $request->validated("planThinning_nInspB"),
            planThinning_nInspC: $request->validated("planThinning_nInspC"),
            planThinning_nInspD: $request->validated("planThinning_nInspD"),
            planThinning_injectionPoints: $request->validated("planThinning_injectionPoints"),
            planThinning_deadLegs: $request->validated("planThinning_deadLegs"),
            planThinning_weldingConstruction: $request->validated("planThinning_weldingConstruction"),
            planThinning_astMaintenance: $request->validated("planThinning_astMaintenance"),
            planThinning_settlement: $request->validated("planThinning_settlement"),
            planThinning_onlineMonitoring: $request->validated("planThinning_onlineMonitoring"),
        );
    }

    public function build(): array
    {
        $arr = [
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

        // if (!is_null($this->year)) {
        //     $arr['year'] = $this->year;
        // }

        return $arr;
    }
}
