<?php

namespace App\DTO\PlanExCor;

use App\Http\Requests\PlanExCor\UpdatePlanExCorRequest;

class UpdatePlanExCorDTO
{
    public function __construct(
        public readonly ?string $planExCor_equationDesign = null,
        public readonly ?string $planExCor_interface = null,
        public readonly ?string $planExCor_tMinMM = null,
        public readonly ?string $planExCor_tMinInch = null,
    ) {
    }

    public static function fromRequest(UpdatePlanExCorRequest $request): self
    {
        return new self(
            planExCor_equationDesign: $request->validated("planExCor_equationDesign"),
            planExCor_interface: $request->validated("planExCor_interface"),
            planExCor_tMinMM: $request->validated("planExCor_tMinMM"),
            planExCor_tMinInch: $request->validated("planExCor_tMinInch"),
        );
    }

    public function build(): array
    {
        $arr = [
            "planExCor_equationDesign" => $this->planExCor_equationDesign,
            "planExCor_interface" => $this->planExCor_interface,
            "planExCor_tMinMM" => $this->planExCor_tMinMM,
            "planExCor_tMinInch" => $this->planExCor_tMinInch,
        ];

        // if (!is_null($this->year)) {
        //     $arr['year'] = $this->year;
        // }

        return $arr;
    }
}
