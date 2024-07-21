<?php

namespace App\DTO\RBIAlkaline;

use App\Http\Requests\RBIAlkaline\CreateRBIAlkalineRequest;
use Illuminate\Support\Str;

class InsertRBIAlkalineDTO
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

    public static function fromRequest(CreateRBIAlkalineRequest $request): self
    {
        return new self(
            rbiAlkaline_componentId: $request->validated("rbiAlkaline_componentId"),
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
