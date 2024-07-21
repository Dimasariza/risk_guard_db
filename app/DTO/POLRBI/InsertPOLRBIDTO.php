<?php

namespace App\DTO\POLRBI;

use App\Http\Requests\POLRBI\CreatePOLRBIRequest;
use Illuminate\Support\Str;

class InsertPOLRBIDTO
{
    public function __construct(
        public readonly string $rbi_componentId,
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
        public readonly ?string $rbi_failureFrequency = null,
        public readonly ?string $rbi_damageFactor = null,
        public readonly ?string $rbi_rbiDate = null,
    ) {
    }

    public static function fromRequest(CreatePOLRBIRequest $request): self
    {
        return new self(
            rbi_componentId: $request->validated("rbi_componentId"),
        );
    }

    public function build(): array
    {
        return [
            'rbi_id' => Str::random(9),
            "rbi_componentId" => $this->rbi_componentId,
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
            "rbi_failureFrequency" => $this->rbi_failureFrequency,
            "rbi_damageFactor" => $this->rbi_damageFactor,
            "rbi_rbiDate" => $this->rbi_rbiDate,
        ];
    }
}
