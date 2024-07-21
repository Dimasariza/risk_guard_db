<?php

namespace App\DTO\PlanAlkaline;

use App\Http\Requests\PlanAlkaline\CreatePlanAlkalineRequest;
use Illuminate\Support\Str;

class InsertPlanAlkalineDTO
{
    public function __construct(
        public readonly string $planAlkaline_componentId,
        public readonly ?string $planAlkaline_ph = null,
        public readonly ?string $planAlkaline_inspection = null,
        public readonly ?string $planAlkaline_co3Consentration = null,
        public readonly ?string $planAlkaline_dfacscc = null,
        public readonly ?bool $planAlkaline_shellPwht = null,
        public readonly ?bool $planAlkaline_headPwht = null,
    ) {
    }

    public static function fromRequest(CreatePlanAlkalineRequest $request): self
    {
        return new self(
            planAlkaline_componentId: $request->validated("planAlkaline_componentId"),
        );
    }

    public function build(): array
    {
        return [
            'planAlkaline_id' => Str::random(9),
            "planAlkaline_componentId" => $this->planAlkaline_componentId,
            "planAlkaline_ph" => $this->planAlkaline_ph,
            "planAlkaline_inspection" => $this->planAlkaline_inspection,
            "planAlkaline_co3Consentration" => $this->planAlkaline_co3Consentration,
            "planAlkaline_dfacscc" => $this->planAlkaline_dfacscc,
            "planAlkaline_shellPwht" => $this->planAlkaline_shellPwht,
            "planAlkaline_headPwht" => $this->planAlkaline_headPwht,
        ];
    }
}
