<?php

namespace App\DTO\POFRBI;

use App\Http\Requests\POFRBI\CreatePOFRBIRequest;
use Illuminate\Support\Str;

class InsertPOFRBIDTO
{
    public function __construct(
        public readonly string $rbiAlkaline_componentId,
        public readonly ?string $rbiAlkaline_ph = null,
        public readonly ?string $rbiAlkaline_inspection = null,
        public readonly ?string $rbiAlkaline_co3Consentration = null,
        public readonly ?string $rbiAlkaline_dfacscc = null,
        public readonly ?bool $rbiAlkaline_shellPwht = null,
        public readonly ?bool $rbiAlkaline_headPwht = null,
    ) {
    }

    public static function fromRequest(CreatePOFRBIRequest $request): self
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
            "rbiAlkaline_componentId" => $this->rbiAlkaline_componentId,
            "rbiAlkaline_ph" => $this->rbiAlkaline_ph,
            "rbiAlkaline_inspection" => $this->rbiAlkaline_inspection,
            "rbiAlkaline_co3Consentration" => $this->rbiAlkaline_co3Consentration,
            "rbiAlkaline_dfacscc" => $this->rbiAlkaline_dfacscc,
            "rbiAlkaline_shellPwht" => $this->rbiAlkaline_shellPwht,
            "rbiAlkaline_headPwht" => $this->rbiAlkaline_headPwht,
        ];
    }
}
