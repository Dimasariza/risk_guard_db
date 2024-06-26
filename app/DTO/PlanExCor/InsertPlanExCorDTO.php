<?php

namespace App\DTO\PlanExCor;

use App\Http\Requests\PlanExCor\CreatePlanExCorRequest;
use Illuminate\Support\Str;

class InsertPlanExCorDTO
{
    public function __construct(
        public readonly string $planExCor_componentId,
        public readonly ?string $planExCor_yearAssesment = null,
        public readonly ?string $planExCor_yearInstallation = null,
        public readonly ?string $planExCor_thicknessValue = null,
        public readonly ?string $planExCor_baseCorrosionRate = null,
        public readonly ?string $planExCor_finalCorrosionRate = null,
        public readonly ?string $planExCor_shellTimeInService = null,
        public readonly ?string $planExCor_headTimeInService = null,
        public readonly ?string $planExCor_ageCoat = null,
        public readonly ?string $planExCor_adjusmentCoat = null,
        public readonly ?string $planExCor_age = null,
        public readonly ?string $planExCor_minReqWallThickness = null,
        public readonly ?string $planExCor_shellDFParameter = null,
        public readonly ?string $planExCor_headDFParameter = null,
        public readonly ?string $planExCor_flowStress = null,
        public readonly ?string $planExCor_shellStrengthRatio = null,
        public readonly ?string $planExCor_headStrengthRatio = null,
        public readonly ?string $planExCor_numInspA = null,
        public readonly ?string $planExCor_numInspB = null,
        public readonly ?string $planExCor_numInspC = null,
        public readonly ?string $planExCor_numInspD = null,
    ) {
    }

    public static function fromRequest(CreatePlanExCorRequest $request): self
    {
        return new self(
            planExCor_componentId: $request->validated("planExCor_componentId"),
            // planExCor_yearInstallation: $request->validated("planExCor_yearInstallation"),
            // planExCor_thicknessValue: $request->validated("planExCor_thicknessValue"),
            // planExCor_baseCorrosionRate: $request->validated("planExCor_baseCorrosionRate"),
            // planExCor_finalCorrosionRate: $request->validated("planExCor_finalCorrosionRate"),
            // planExCor_shellTimeInService: $request->validated("planExCor_shellTimeInService"),
            // planExCor_headTimeInService: $request->validated("planExCor_headTimeInService"),
            // planExCor_ageCoat: $request->validated("planExCor_ageCoat"),
            // planExCor_adjusmentCoat: $request->validated("planExCor_adjusmentCoat"),
            // planExCor_age: $request->validated("planExCor_age"),
            // planExCor_minReqWallThickness: $request->validated("planExCor_minReqWallThickness"),
            // planExCor_shellDFParameter: $request->validated("planExCor_shellDFParameter"),
            // planExCor_headDFParameter: $request->validated("planExCor_headDFParameter"),
            // planExCor_flowStress: $request->validated("planExCor_flowStress"),
            // planExCor_shellStrengthRatio: $request->validated("planExCor_shellStrengthRatio"),
            // planExCor_headStrengthRatio: $request->validated("planExCor_headStrengthRatio"),
            // planExCor_numInspA: $request->validated("planExCor_numInspA"),
            // planExCor_numInspB: $request->validated("planExCor_numInspB"),
            // planExCor_numInspC: $request->validated("planExCor_numInspC"),
            // planExCor_numInspD: $request->validated("planExCor_numInspD"),
        );
    }

    public function build(): array
    {
        return [
            "planExCor_id" => Str::random(9),
            "planExCor_componentId" => $this->planExCor_componentId,
            "planExCor_yearAssesment" => $this->planExCor_yearAssesment,
            "planExCor_yearInstallation" => $this->planExCor_yearInstallation,
            "planExCor_thicknessValue" => $this->planExCor_thicknessValue,
            "planExCor_baseCorrosionRate" => $this->planExCor_baseCorrosionRate,
            "planExCor_finalCorrosionRate" => $this->planExCor_finalCorrosionRate,
            "planExCor_shellTimeInService" => $this->planExCor_shellTimeInService,
            "planExCor_headTimeInService" => $this->planExCor_headTimeInService,
            "planExCor_ageCoat" => $this->planExCor_ageCoat,
            "planExCor_adjusmentCoat" => $this->planExCor_adjusmentCoat,
            "planExCor_age" => $this->planExCor_age,
            "planExCor_minReqWallThickness" => $this->planExCor_minReqWallThickness,
            "planExCor_shellDFParameter" => $this->planExCor_shellDFParameter,
            "planExCor_headDFParameter" => $this->planExCor_headDFParameter,
            "planExCor_flowStress" => $this->planExCor_flowStress,
            "planExCor_shellStrengthRatio" => $this->planExCor_shellStrengthRatio,
            "planExCor_headStrengthRatio" => $this->planExCor_headStrengthRatio,
            "planExCor_numInspA" => $this->planExCor_numInspA,
            "planExCor_numInspB" => $this->planExCor_numInspB,
            "planExCor_numInspC" => $this->planExCor_numInspC,
            "planExCor_numInspD" => $this->planExCor_numInspD,
        ];
    }
}
