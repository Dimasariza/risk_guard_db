<?php

namespace App\DTO\PlanValue;

use App\Http\Requests\PlanValue\UpdatePlanValueRequest;

class UpdatePlanValueDTO
{
    public function __construct(
        public readonly ?string $planValue_FMS = null,
        public readonly ?string $planValue_failureFrequency = null,
    ) {
    }

    public static function fromRequest(UpdatePlanValueRequest $request): self
    {
        return new self(
            planValue_FMS: $request->validated("planValue_FMS"),
            planValue_failureFrequency: $request->validated("planValue_failureFrequency"),
        );
    }

    public function build(): array
    {
        $arr = [
            "planValue_FMS" => $this->planValue_FMS,
            "planValue_failureFrequency" => $this->planValue_failureFrequency,
        ];

        // if (!is_null($this->year)) {
        //     $arr['year'] = $this->year;
        // }

        return $arr;
    }
}
