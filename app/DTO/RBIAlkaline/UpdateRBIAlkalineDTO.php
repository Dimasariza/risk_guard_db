<?php

namespace App\DTO\RBIAlkaline;

use App\Http\Requests\PlanThinning\UpdatePlanThinningRequest;
use App\Http\Requests\RBIAlkaline\UpdateRBIAlkalineRequest;

class UpdateRBIAlkalineDTO
{
    public function __construct(
        public readonly ?string $rbiAlkaline_ph = null,
        public readonly ?string $rbiAlkaline_inspection = null,
        public readonly ?string $rbiAlkaline_co3Consentration = null,
        public readonly ?string $rbiAlkaline_dfacscc = null,
        public readonly ?string $rbiAlkaline_numOfInspection = null,
        public readonly ?bool $rbiAlkaline_shellPwht = null,
        public readonly ?bool $rbiAlkaline_headPwht = null,
    ) {
    }

    public static function fromRequest(UpdateRBIAlkalineRequest $request): self
    {
        return new self(
            rbiAlkaline_ph: $request->validated("rbiAlkaline_ph"),
            rbiAlkaline_inspection: $request->validated("rbiAlkaline_inspection"),
            rbiAlkaline_co3Consentration: $request->validated("rbiAlkaline_co3Consentration"),
            rbiAlkaline_dfacscc: $request->validated("rbiAlkaline_dfacscc"),
            rbiAlkaline_numOfInspection: $request->validated("rbiAlkaline_numOfInspection"),
            rbiAlkaline_shellPwht: $request->validated("rbiAlkaline_shellPwht"),
            rbiAlkaline_headPwht: $request->validated("rbiAlkaline_headPwht"),
        );
    }

    public function build(): array
    {
        $arr = [
            "rbiAlkaline_ph" => $this->rbiAlkaline_ph,
            "rbiAlkaline_inspection" => $this->rbiAlkaline_inspection,
            "rbiAlkaline_co3Consentration" => $this->rbiAlkaline_co3Consentration,
            "rbiAlkaline_dfacscc" => $this->rbiAlkaline_dfacscc,
            "rbiAlkaline_numOfInspection" => $this->rbiAlkaline_numOfInspection,
            "rbiAlkaline_shellPwht" => $this->rbiAlkaline_shellPwht,
            "rbiAlkaline_headPwht" => $this->rbiAlkaline_headPwht,
        ];

        // if (!is_null($this->year)) {
        //     $arr['year'] = $this->year;
        // }

        return $arr;
    }
}
