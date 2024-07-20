<?php

namespace App\DTO\POLPlan;

use App\Http\Requests\POLPlan\CreatePOLPlanRequest;
use Illuminate\Support\Str;

class InsertPOLPlanDTO
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
        public readonly ?string $plan_eventFreq = null,
        public readonly ?string $plan_protectedEquipment = null,
        public readonly ?string $plan_rbiDate = null,
    ) {
    }

    public static function fromRequest(CreatePOLPlanRequest $request): self
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
            "plan_eventFreq" => $this->plan_eventFreq,
            "plan_protectedEquipment" => $this->plan_protectedEquipment,
            "plan_rbiDate" => $this->plan_rbiDate,
        ];
    }
}