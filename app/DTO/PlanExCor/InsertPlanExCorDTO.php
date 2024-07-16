<?php

namespace App\DTO\PlanExCor;

use App\Http\Requests\PlanExCor\CreatePlanExCorRequest;
use Illuminate\Support\Str;

class InsertPlanExCorDTO
{
    public function __construct(
        public readonly string $planExCor_componentId,
        public readonly ?string $planExCor_equationDesign = null,
        public readonly ?string $planExCor_interface = null,
        public readonly ?string $planExCor_tMinMM = null,
        public readonly ?string $planExCor_tMinInch = null,
    ) {
    }

    public static function fromRequest(CreatePlanExCorRequest $request): self
    {
        return new self(
            planExCor_componentId: $request->validated("planExCor_componentId"),
        );
    }

    public function build(): array
    {
        return [
            "planExCor_id" => Str::random(9),
            "planExCor_componentId" => $this->planExCor_componentId,
            "planExCor_equationDesign" => $this->planExCor_equationDesign,
            "planExCor_interface" => $this->planExCor_interface,
            "planExCor_tMinMM" => $this->planExCor_tMinMM,
            "planExCor_tMinInch" => $this->planExCor_tMinInch,
        ];
    }
}
