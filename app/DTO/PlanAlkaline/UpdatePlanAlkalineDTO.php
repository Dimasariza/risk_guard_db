<?php

namespace App\DTO\PlanAlkaline;

use App\Http\Requests\PlanAlkaline\UpdatePlanAlkalineRequest;
use App\Http\Requests\PlanThinning\UpdatePlanThinningRequest;

class UpdatePlanAlkalineDTO
{
    public function __construct(
        public readonly ?string $planAlkaline_ph = null,
        public readonly ?string $planAlkaline_inspection = null,
        public readonly ?string $planAlkaline_co3Consentration = null,
        public readonly ?string $planAlkaline_dfacscc = null,
        public readonly ?string $planAlkaline_numOfInspection,
        public readonly ?bool $planAlkaline_shellPwht = null,
        public readonly ?bool $planAlkaline_headPwht = null,
    ) {
    }

    public static function fromRequest(UpdatePlanAlkalineRequest $request): self
    {
        return new self(
            planAlkaline_ph: $request->validated("planAlkaline_ph"),
            planAlkaline_inspection: $request->validated("planAlkaline_inspection"),
            planAlkaline_co3Consentration: $request->validated("planAlkaline_co3Consentration"),
            planAlkaline_dfacscc: $request->validated("planAlkaline_dfacscc"),
            planAlkaline_numOfInspection: $request->validated("planAlkaline_numOfInspection"),
            planAlkaline_shellPwht: $request->validated("planAlkaline_shellPwht"),
            planAlkaline_headPwht: $request->validated("planAlkaline_headPwht"),
        );
    }

    public function build(): array
    {
        $arr = [
            "planAlkaline_ph" => $this->planAlkaline_ph,
            "planAlkaline_inspection" => $this->planAlkaline_inspection,
            "planAlkaline_co3Consentration" => $this->planAlkaline_co3Consentration,
            "planAlkaline_dfacscc" => $this->planAlkaline_dfacscc,
            "planAlkaline_numOfInspection" => $this->planAlkaline_numOfInspection,
            "planAlkaline_shellPwht" => $this->planAlkaline_shellPwht,
            "planAlkaline_headPwht" => $this->planAlkaline_headPwht,
        ];

        // if (!is_null($this->year)) {
        //     $arr['year'] = $this->year;
        // }

        return $arr;
    }
}
