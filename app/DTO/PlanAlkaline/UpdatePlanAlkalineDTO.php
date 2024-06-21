<?php

namespace App\DTO\PlanAlkaline;

use App\Http\Requests\PlanAlkaline\UpdatePlanAlkalineRequest;
use App\Http\Requests\PlanThinning\UpdatePlanThinningRequest;

class UpdatePlanAlkalineDTO
{
    public function __construct(
        public readonly string $planAlkaline_shellSusceptibility,
        public readonly string $planAlkaline_headSusceptibility,
        public readonly string $planAlkaline_shellSeverityId,
        public readonly string $planAlkaline_headSeverityId,
        public readonly string $planAlkaline_ageTimeInService,
        public readonly string $planAlkaline_sheelSection,
        public readonly string $planAlkaline_headSection,
    ) {
    }

    public static function fromRequest(UpdatePlanAlkalineRequest $request): self
    {
        return new self(
            planAlkaline_shellSusceptibility: $request->validated("planAlkaline_shellSusceptibility"),
            planAlkaline_headSusceptibility: $request->validated("planAlkaline_headSusceptibility"),
            planAlkaline_shellSeverityId: $request->validated("planAlkaline_shellSeverityId"),
            planAlkaline_headSeverityId: $request->validated("planAlkaline_headSeverityId"),
            planAlkaline_ageTimeInService: $request->validated("planAlkaline_ageTimeInService"),
            planAlkaline_sheelSection: $request->validated("planAlkaline_sheelSection"),
            planAlkaline_headSection: $request->validated("planAlkaline_headSection"),
        );
    }

    public function build(): array
    {
        $arr = [
            "planAlkaline_shellSusceptibility" => $this->planAlkaline_shellSusceptibility,
            "planAlkaline_headSusceptibility" => $this->planAlkaline_headSusceptibility,
            "planAlkaline_shellSeverityId" => $this->planAlkaline_shellSeverityId,
            "planAlkaline_headSeverityId" => $this->planAlkaline_headSeverityId,
            "planAlkaline_ageTimeInService" => $this->planAlkaline_ageTimeInService,
            "planAlkaline_sheelSection" => $this->planAlkaline_sheelSection,
            "planAlkaline_headSection" => $this->planAlkaline_headSection,
        ];

        // if (!is_null($this->year)) {
        //     $arr['year'] = $this->year;
        // }

        return $arr;
    }
}
