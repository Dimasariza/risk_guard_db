<?php

namespace App\DTO\POLPlan;

use App\Http\Requests\POLPlan\UpdatePOLPlanRequest;

class UpdatePOLPlanDTO
{
    public function __construct(
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
        public readonly ?string $plan_rbiDate = null,
    ) {
    }

    public static function fromRequest(UpdatePOLPlanRequest $request): self
    {
        return new self(
            plan_fluidService: $request->validated("plan_fluidService"),
            plan_typicalTempF: $request->validated("plan_typicalTempF"),
            plan_designType: $request->validated("plan_designType"),
            plan_discharge: $request->validated("plan_discharge"),
            plan_adjusmentFactor: $request->validated("plan_adjusmentFactor"),
            plan_serviceSeverity: $request->validated("plan_serviceSeverity"),
            plan_envAdjusmentFactor: $request->validated("plan_envAdjusmentFactor"),
            plan_inspEffectiveness: $request->validated("plan_inspEffectiveness"),
            plan_confidenceFactor: $request->validated("plan_confidenceFactor"),
            plan_eventFreqFire: $request->validated("plan_eventFreqFire"),
            plan_eventFreqOverFilling: $request->validated("plan_eventFreqOverFilling"),
            plan_protectedEquipment: $request->validated("plan_protectedEquipment"),
            plan_rbiDate: $request->validated("plan_rbiDate"),
        );
    }

    public function build(): array
    {
        $arr = [
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
            "plan_rbiDate" => $this->plan_rbiDate,
        ];

        // if (!is_null($this->year)) {
        //     $arr['year'] = $this->year;
        // }

        return $arr;
    }
}
