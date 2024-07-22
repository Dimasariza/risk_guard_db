<?php

namespace App\DTO\POLRBI;

use App\Http\Requests\POLRBI\UpdatePOLRBIRequest;

class UpdatePOLRBIDTO
{
    public function __construct(
        public readonly ?string $rbi_fluidService = null,
        public readonly ?string $rbi_typicalTempF = null,
        public readonly ?string $rbi_designType = null,
        public readonly ?string $rbi_discharge = null,
        public readonly ?string $rbi_adjusmentFactor = null,
        public readonly ?string $rbi_serviceSeverity = null,
        public readonly ?string $rbi_envAdjusmentFactor = null,
        public readonly ?string $rbi_inspEffectiveness = null,
        public readonly ?string $rbi_confidenceFactor = null,
        public readonly ?string $rbi_eventFreqFire = null,
        public readonly ?string $rbi_eventFreqOverFilling = null,
        public readonly ?string $rbi_protectedEquipment = null,
        public readonly ?string $rbi_dfValue = null,
        public readonly ?string $rbi_failureFrequency = null,
        public readonly ?string $rbi_damageFactor = null,
        public readonly ?string $rbi_rbiDate = null,
    ) {
    }

    public static function fromRequest(UpdatePOLRBIRequest $request): self
    {
        return new self(
            rbi_fluidService: $request->validated("rbi_fluidService"),
            rbi_typicalTempF: $request->validated("rbi_typicalTempF"),
            rbi_designType: $request->validated("rbi_designType"),
            rbi_discharge: $request->validated("rbi_discharge"),
            rbi_adjusmentFactor: $request->validated("rbi_adjusmentFactor"),
            rbi_serviceSeverity: $request->validated("rbi_serviceSeverity"),
            rbi_envAdjusmentFactor: $request->validated("rbi_envAdjusmentFactor"),
            rbi_inspEffectiveness: $request->validated("rbi_inspEffectiveness"),
            rbi_confidenceFactor: $request->validated("rbi_confidenceFactor"),
            rbi_eventFreqFire: $request->validated("rbi_eventFreqFire"),
            rbi_eventFreqOverFilling: $request->validated("rbi_eventFreqOverFilling"),
            rbi_protectedEquipment: $request->validated("rbi_protectedEquipment"),
            rbi_dfValue: $request->validated("rbi_dfValue"),
            rbi_failureFrequency: $request->validated("rbi_failureFrequency"),
            rbi_damageFactor: $request->validated("rbi_damageFactor"),
            rbi_rbiDate: $request->validated("rbi_rbiDate"),
        );
    }

    public function build(): array
    {
        $arr = [
            "rbi_fluidService" => $this->rbi_fluidService,
            "rbi_typicalTempF" => $this->rbi_typicalTempF,
            "rbi_designType" => $this->rbi_designType,
            "rbi_discharge" => $this->rbi_discharge,
            "rbi_adjusmentFactor" => $this->rbi_adjusmentFactor,
            "rbi_serviceSeverity" => $this->rbi_serviceSeverity,
            "rbi_envAdjusmentFactor" => $this->rbi_envAdjusmentFactor,
            "rbi_inspEffectiveness" => $this->rbi_inspEffectiveness,
            "rbi_confidenceFactor" => $this->rbi_confidenceFactor,
            "rbi_eventFreqFire" => $this->rbi_eventFreqFire,
            "rbi_eventFreqOverFilling" => $this->rbi_eventFreqOverFilling,
            "rbi_protectedEquipment" => $this->rbi_protectedEquipment,
            "rbi_dfValue" => $this->rbi_dfValue,
            "rbi_failureFrequency" => $this->rbi_failureFrequency,
            "rbi_damageFactor" => $this->rbi_damageFactor,
            "rbi_rbiDate" => $this->rbi_rbiDate,
        ];

        // if (!is_null($this->year)) {
        //     $arr['year'] = $this->year;
        // }

        return $arr;
    }
}
