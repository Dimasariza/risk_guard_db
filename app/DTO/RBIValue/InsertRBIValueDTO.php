<?php

namespace App\DTO\RBIValue;

use App\Http\Requests\RBIValue\CreateRBIValueRequest;
use Illuminate\Support\Str;

class InsertRBIValueDTO
{
    public function __construct(
        public readonly string $rbiValue_componentId,
        public readonly ?string $rbiValue_gffTotal = null,
        public readonly ?string $rbiValue_shellThinning = null,
        public readonly ?string $rbiValue_headThinning = null,
        public readonly ?string $rbiValue_shellExternal = null,
        public readonly ?string $rbiValue_headExternal = null,
        public readonly ?string $rbiValue_shellTotal = null,
        public readonly ?string $rbiValue_headTotal = null,
        public readonly ?string $rbiValue_shellSection = null,
        public readonly ?string $rbiValue_headSection = null,
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
            "rbiValue_gffTotal" => $this->rbiValue_gffTotal,
            "rbiValue_shellThinning" => $this->rbiValue_shellThinning,
            "rbiValue_headThinning" => $this->rbiValue_headThinning,
            "rbiValue_shellExternal" => $this->rbiValue_shellExternal,
            "rbiValue_headExternal" => $this->rbiValue_headExternal,
            "rbiValue_shellTotal" => $this->rbiValue_shellTotal,
            "rbiValue_headTotal" => $this->rbiValue_headTotal,
            "rbiValue_shellSection" => $this->rbiValue_shellSection,
            "rbiValue_headSection" => $this->rbiValue_headSection,
        ];
    }
}
