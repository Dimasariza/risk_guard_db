<?php

namespace App\DTO\RBIValue;

use App\Http\Requests\RBIValue\UpdateRBIValueRequest;

class UpdateRBIValueDTO
{
    public function __construct(
        public readonly ?string $rbiValue_FMS = null,
        public readonly ?string $rbiValue_failureFrequency = null,
    ) {
    }

    public static function fromRequest(UpdateRBIValueRequest $request): self
    {
        return new self(
            rbiValue_FMS: $request->validated("rbiValue_FMS"),
            rbiValue_failureFrequency: $request->validated("rbiValue_failureFrequency"),
        );
    }

    public function build(): array
    {
        $arr = [
            "rbiValue_FMS" => $this->rbiValue_FMS,
            "rbiValue_failureFrequency" => $this->rbiValue_failureFrequency,
        ];

        // if (!is_null($this->year)) {
        //     $arr['year'] = $this->year;
        // }

        return $arr;
    }
}
