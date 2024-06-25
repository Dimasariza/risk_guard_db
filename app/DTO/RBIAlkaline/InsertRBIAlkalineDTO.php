<?php

namespace App\DTO\RBIAlkaline;

use App\Http\Requests\RBIAlkaline\CreateRBIAlkalineRequest;
use Illuminate\Support\Str;

class InsertRBIAlkalineDTO
{
    public function __construct(
        public readonly string $rbiAlkaline_componentId,
        public readonly ?string $rbiAlkaline_shellSusceptibility = null,
        public readonly ?string $rbiAlkaline_headSusceptibility = null,
        public readonly ?string $rbiAlkaline_shellSeverityId = null,
        public readonly ?string $rbiAlkaline_headSeverityId = null,
        public readonly ?string $rbiAlkaline_ageTimeInService = null,
        public readonly ?string $rbiAlkaline_sheelSection = null,
        public readonly ?string $rbiAlkaline_headSection = null,
    ) {
    }

    public static function fromRequest(CreateRBIAlkalineRequest $request): self
    {
        return new self(
            rbiAlkaline_componentId: $request->validated("rbiAlkaline_componentId"),
            // rbiAlkaline_shellSusceptibility: $request->validated("rbiAlkaline_shellSusceptibility"),
            // rbiAlkaline_headSusceptibility: $request->validated("rbiAlkaline_headSusceptibility"),
            // rbiAlkaline_shellSeverityId: $request->validated("rbiAlkaline_shellSeverityId"),
            // rbiAlkaline_headSeverityId: $request->validated("rbiAlkaline_headSeverityId"),
            // rbiAlkaline_ageTimeInService: $request->validated("rbiAlkaline_ageTimeInService"),
            // rbiAlkaline_sheelSection: $request->validated("rbiAlkaline_sheelSection"),
            // rbiAlkaline_headSection: $request->validated("rbiAlkaline_headSection"),
        );
    }

    public function build(): array
    {
        return [
            'rbiAlkaline_id' => Str::random(9),
            "rbiAlkaline_shellSusceptibility" => $this->rbiAlkaline_shellSusceptibility,
            "rbiAlkaline_headSusceptibility" => $this->rbiAlkaline_headSusceptibility,
            "rbiAlkaline_shellSeverityId" => $this->rbiAlkaline_shellSeverityId,
            "rbiAlkaline_headSeverityId" => $this->rbiAlkaline_headSeverityId,
            "rbiAlkaline_ageTimeInService" => $this->rbiAlkaline_ageTimeInService,
            "rbiAlkaline_sheelSection" => $this->rbiAlkaline_sheelSection,
            "rbiAlkaline_headSection" => $this->rbiAlkaline_headSection,
        ];
    }
}
