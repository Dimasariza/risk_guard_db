<?php

namespace App\DTO\PlanAlkaline;

use App\Http\Requests\PlanAlkaline\CreatePlanAlkalineRequest;
use Illuminate\Support\Str;

class InsertPlanAlkalineDTO
{
    public function __construct(
        public readonly string $planAlkaline_componentId,
        public readonly ?string $planAlkaline_shellSusceptibility = null,
        public readonly ?string $planAlkaline_headSusceptibility = null,
        public readonly ?string $planAlkaline_shellSeverityId = null,
        public readonly ?string $planAlkaline_headSeverityId = null,
        public readonly ?string $planAlkaline_ageTimeInService = null,
        public readonly ?string $planAlkaline_sheelSection = null,
        public readonly ?string $planAlkaline_headSection = null,
    ) {
    }

    public static function fromRequest(CreatePlanAlkalineRequest $request): self
    {
        return new self(
            planAlkaline_componentId: $request->validated("planAlkaline_componentId"),
            // planAlkaline_shellSusceptibility: $request->validated("planAlkaline_shellSusceptibility"),
            // planAlkaline_headSusceptibility: $request->validated("planAlkaline_headSusceptibility"),
            // planAlkaline_shellSeverityId: $request->validated("planAlkaline_shellSeverityId"),
            // planAlkaline_headSeverityId: $request->validated("planAlkaline_headSeverityId"),
            // planAlkaline_ageTimeInService: $request->validated("planAlkaline_ageTimeInService"),
            // planAlkaline_sheelSection: $request->validated("planAlkaline_sheelSection"),
            // planAlkaline_headSection: $request->validated("planAlkaline_headSection"),
        );
    }

    public function build(): array
    {
        return [
            'planAlkaline_id' => Str::random(9),
            'planAlkaline_componentId' => $this->planAlkaline_componentId,
            "planAlkaline_shellSusceptibility" => $this->planAlkaline_shellSusceptibility,
            "planAlkaline_headSusceptibility" => $this->planAlkaline_headSusceptibility,
            "planAlkaline_shellSeverityId" => $this->planAlkaline_shellSeverityId,
            "planAlkaline_headSeverityId" => $this->planAlkaline_headSeverityId,
            "planAlkaline_ageTimeInService" => $this->planAlkaline_ageTimeInService,
            "planAlkaline_sheelSection" => $this->planAlkaline_sheelSection,
            "planAlkaline_headSection" => $this->planAlkaline_headSection,
        ];
    }
}
