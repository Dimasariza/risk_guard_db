<?php

namespace App\DTO\RBIValue;

use App\Http\Requests\RBIValue\CreateRBIValueRequest;
use Illuminate\Support\Str;

class InsertRBIValueDTO
{
    public function __construct(
        public readonly string $rbiValue_id,
        public readonly string $rbiValue_gffTotal,
        public readonly string $rbiValue_shellThinning,
        public readonly string $rbiValue_headThinning,
        public readonly string $rbiValue_shellExternal,
        public readonly string $rbiValue_headExternal,
        public readonly string $rbiValue_shellTotal,
        public readonly string $rbiValue_headTotal,
        public readonly string $rbiValue_shellSection,
        public readonly string $rbiValue_headSection,
    ) {
    }

    public static function fromRequest(CreateRBIValueRequest $request): self
    {
        return new self(
            rbiValue_id: Str::random(9),
            rbiValue_gffTotal: $request->validated("rbiValue_gffTotal"),
            rbiValue_shellThinning: $request->validated("rbiValue_shellThinning"),
            rbiValue_headThinning: $request->validated("rbiValue_headThinning"),
            rbiValue_shellExternal: $request->validated("rbiValue_shellExternal"),
            rbiValue_headExternal: $request->validated("rbiValue_headExternal"),
            rbiValue_shellTotal: $request->validated("rbiValue_shellTotal"),
            rbiValue_headTotal: $request->validated("rbiValue_headTotal"),
            rbiValue_shellSection: $request->validated("rbiValue_shellSection"),
            rbiValue_headSection: $request->validated("rbiValue_headSection"),
        );
    }

    public function build(): array
    {
        return [
            "rbiValue_id" => $this->rbiValue_id,
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
