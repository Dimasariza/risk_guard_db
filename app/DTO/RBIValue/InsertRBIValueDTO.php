<?php

namespace App\DTO\RBIValue;

use App\Http\Requests\RBIValue\CreateRBIValueRequest;
use Illuminate\Support\Str;

class InsertRBIValueDTO
{
    public function __construct(
        public readonly string $rbiValue_componentId,
        public readonly ?string $rbiValue_FMS = null,
        public readonly ?string $rbiValue_failureFrequency = null,
    ) {
    }

    public static function fromRequest(CreateRBIValueRequest $request): self
    {
        return new self(
            rbiValue_componentId: $request->validated("rbiValue_componentId"),
        );
    }

    public function build(): array
    {
        return [
            "rbiValue_componentId" => $this->rbiValue_componentId,
            "rbiValue_FMS" => $this->rbiValue_FMS,
            "rbiValue_failureFrequency" => $this->rbiValue_failureFrequency,
        ];
    }
}
