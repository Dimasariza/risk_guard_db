<?php

namespace App\DTO\POFPlan;

use App\Http\Requests\POFPlan\CreatePOFPlanRequest;
use Illuminate\Support\Str;

class InsertPOFPlanDTO
{
    public function __construct(
        public readonly string $plan_componentId,
        public readonly ?string $plan_fluidService = null,
        public readonly ?string $plan_typicalTempF = null,
        public readonly ?string $plan_designType = null,
        public readonly ?string $plan_discharge = null,
        public readonly ?string $plan_adjusmentFactor = null,
        public readonly ?string $plan_serviceSeverity = null,
        public readonly ?string $plan_envAdjusmentFactor = null,
        public readonly ?string $plan_inspEffectiveness = null,
        public readonly ?string $plan_confidenceFactor = null,
        public readonly ?string $plan_eventFreqFire = null,
        public readonly ?string $plan_eventFreqOverFilling = null,
        public readonly ?string $plan_protectedEquipment = null,
        public readonly ?string $plan_planDate = null,
    ) {
    }

    public static function fromRequest(CreatePOFPlanRequest $request): self
    {
        return new self(
            plan_componentId: $request->validated("plan_componentId"),
        );
    }

    public function build(): array
    {
        return [
            'plan_id' => Str::random(9),
            "plan_componentId" => $this->plan_componentId,
            "plan_fluidService" => $this->plan_fluidService,
            "plan_typicalTempF" => $this->plan_typicalTempF,
            "plan_designType" => $this->plan_designType,
            "plan_discharge" => $this->plan_discharge,
            "plan_adjusmentFactor" => $this->plan_adjusmentFactor,
            "plan_serviceSeverity" => $this->plan_serviceSeverity,
            "plan_envAdjusmentFactor" => $this->plan_envAdjusmentFactor,
            "plan_inspEffectiveness" => $this->plan_inspEffectiveness,
            "plan_confidenceFactor" => $this->plan_confidenceFactor,
            "plan_eventFreqFire" => $this->plan_eventFreqFire,
            "plan_eventFreqOverFilling" => $this->plan_eventFreqOverFilling,
            "plan_protectedEquipment" => $this->plan_protectedEquipment,
            "plan_planDate" => $this->plan_planDate,
        ];
    }
}
