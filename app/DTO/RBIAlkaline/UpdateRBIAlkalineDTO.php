<?php

namespace App\DTO\RBIAlkaline;

use App\Http\Requests\PlanThinning\UpdatePlanThinningRequest;
use App\Http\Requests\RBIAlkaline\UpdateRBIAlkalineRequest;

class UpdateRBIAlkalineDTO
{
    public function __construct(
        public readonly string $rbiAlkaline_shellSusceptibility,
        public readonly string $rbiAlkaline_headSusceptibility,
        public readonly string $rbiAlkaline_shellSeverityId,
        public readonly string $rbiAlkaline_headSeverityId,
        public readonly string $rbiAlkaline_ageTimeInService,
        public readonly string $rbiAlkaline_sheelSection,
        public readonly string $rbiAlkaline_headSection,
    ) {
    }

    public static function fromRequest(UpdateRBIAlkalineRequest $request): self
    {
        return new self(
            rbiAlkaline_shellSusceptibility: $request->validated("rbiAlkaline_shellSusceptibility"),
            rbiAlkaline_headSusceptibility: $request->validated("rbiAlkaline_headSusceptibility"),
            rbiAlkaline_shellSeverityId: $request->validated("rbiAlkaline_shellSeverityId"),
            rbiAlkaline_headSeverityId: $request->validated("rbiAlkaline_headSeverityId"),
            rbiAlkaline_ageTimeInService: $request->validated("rbiAlkaline_ageTimeInService"),
            rbiAlkaline_sheelSection: $request->validated("rbiAlkaline_sheelSection"),
            rbiAlkaline_headSection: $request->validated("rbiAlkaline_headSection"),
        );
    }

    public function build(): array
    {
        $arr = [
            "rbiAlkaline_shellSusceptibility" => $this->rbiAlkaline_shellSusceptibility,
            "rbiAlkaline_headSusceptibility" => $this->rbiAlkaline_headSusceptibility,
            "rbiAlkaline_shellSeverityId" => $this->rbiAlkaline_shellSeverityId,
            "rbiAlkaline_headSeverityId" => $this->rbiAlkaline_headSeverityId,
            "rbiAlkaline_ageTimeInService" => $this->rbiAlkaline_ageTimeInService,
            "rbiAlkaline_sheelSection" => $this->rbiAlkaline_sheelSection,
            "rbiAlkaline_headSection" => $this->rbiAlkaline_headSection,
        ];

        // if (!is_null($this->year)) {
        //     $arr['year'] = $this->year;
        // }

        return $arr;
    }
}
