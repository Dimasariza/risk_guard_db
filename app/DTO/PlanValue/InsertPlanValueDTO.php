<?php

namespace App\DTO\PlanValue;

use App\Http\Requests\PlanValue\CreatePlanValueRequest;
use Illuminate\Support\Str;

class InsertPlanValueDTO
{
    public function __construct(
        public readonly string $planValue_componentId,
        public readonly ?string $planValue_FMS = null,
        public readonly ?string $planValue_failureFrequency = null,
    ) {
    }

    public static function fromRequest(CreatePlanValueRequest $request): self
    {
        return new self(
            planValue_componentId: $request->validated("planValue_componentId"),
        );
    }

    public function build(): array
    {
        return [
            'planValue_id' => Str::random(9),
            "planValue_componentId" => $this->planValue_componentId,
            "planValue_FMS" => $this->planValue_FMS,
            "planValue_failureFrequency" => $this->planValue_failureFrequency,
        ];
    }
}
