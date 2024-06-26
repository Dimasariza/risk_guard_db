<?php

namespace App\DTO\PlanValue;

use App\Http\Requests\PlanValue\CreatePlanValueRequest;
use Illuminate\Support\Str;

class InsertPlanValueDTO
{
    public function __construct(
        public readonly string $planValue_componentId,
        public readonly ?string $planValue_gffTotal = null,
        public readonly ?string $planValue_shellThinning = null,
        public readonly ?string $planValue_headThinning = null,
        public readonly ?string $planValue_shellExternal = null,
        public readonly ?string $planValue_headExternal = null,
        public readonly ?string $planValue_shellTotal = null,
        public readonly ?string $planValue_headTotal = null,
        public readonly ?string $planValue_shellSection = null,
        public readonly ?string $planValue_headSection = null,
    ) {
    }

    public static function fromRequest(CreatePlanValueRequest $request): self
    {
        return new self(
            planValue_componentId: $request->validated("planValue_componentId"),
            // planValue_gffTotal: $request->validated("planValue_gffTotal"),
            // planValue_shellThinning: $request->validated("planValue_shellThinning"),
            // planValue_headThinning: $request->validated("planValue_headThinning"),
            // planValue_shellExternal: $request->validated("planValue_shellExternal"),
            // planValue_headExternal: $request->validated("planValue_headExternal"),
            // planValue_shellTotal: $request->validated("planValue_shellTotal"),
            // planValue_headTotal: $request->validated("planValue_headTotal"),
            // planValue_shellSection: $request->validated("planValue_shellSection"),
            // planValue_headSection: $request->validated("planValue_headSection"),
        );
    }

    public function build(): array
    {
        return [
            "planValue_id" => Str::random(9),
            "planValue_componentId" => $this->planValue_componentId,
            "planValue_gffTotal" => $this->planValue_gffTotal,
            "planValue_shellThinning" => $this->planValue_shellThinning,
            "planValue_headThinning" => $this->planValue_headThinning,
            "planValue_shellExternal" => $this->planValue_shellExternal,
            "planValue_headExternal" => $this->planValue_headExternal,
            "planValue_shellTotal" => $this->planValue_shellTotal,
            "planValue_headTotal" => $this->planValue_headTotal,
            "planValue_shellSection" => $this->planValue_shellSection,
            "planValue_headSection" => $this->planValue_headSection,
        ];
    }
}
