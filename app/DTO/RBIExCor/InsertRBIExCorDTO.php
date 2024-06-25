<?php

namespace App\DTO\RBIExCor;

use App\Http\Requests\RBIExCor\CreateRBIExCorRequest;
use Illuminate\Support\Str;

class InsertRBIExCorDTO
{
    public function __construct(
        public readonly string $rbiExCor_componentId,
        public readonly ?string $rbiExCor_yearAssesment = null,
        public readonly ?string $rbiExCor_yearInstallation = null,
        public readonly ?string $rbiExCor_thicknessValue = null,
        public readonly ?string $rbiExCor_baseCorrosionRate = null,
        public readonly ?string $rbiExCor_finalCorrosionRate = null,
        public readonly ?string $rbiExCor_shellTimeInService = null,
        public readonly ?string $rbiExCor_headTimeInService = null,
        public readonly ?string $rbiExCor_ageCoat = null,
        public readonly ?string $rbiExCor_adjusmentCoat = null,
        public readonly ?string $rbiExCor_age = null,
        public readonly ?string $rbiExCor_minReqWallThickness = null,
        public readonly ?string $rbiExCor_shellDFParameter = null,
        public readonly ?string $rbiExCor_headDFParameter = null,
        public readonly ?string $rbiExCor_flowStress = null,
        public readonly ?string $rbiExCor_shellStrengthRatio = null,
        public readonly ?string $rbiExCor_headStrengthRatio = null,
        public readonly ?string $rbiExCor_numInspA = null,
        public readonly ?string $rbiExCor_numInspB = null,
        public readonly ?string $rbiExCor_numInspC = null,
        public readonly ?string $rbiExCor_numInspD = null,
    ) {
    }

    public static function fromRequest(CreateRBIExCorRequest $request): self
    {
        return new self(
            rbiExCor_componentId: $request->validated("rbiExCor_componentId"),
        );
    }

    public function build(): array
    {
        return [
            "rbiExCor_id" => Str::random(9),
            "rbiExCor_componentId" => $this->rbiExCor_componentId,
            "rbiExCor_yearAssesment" => $this->rbiExCor_yearAssesment,
            "rbiExCor_yearInstallation" => $this->rbiExCor_yearInstallation,
            "rbiExCor_thicknessValue" => $this->rbiExCor_thicknessValue,
            "rbiExCor_baseCorrosionRate" => $this->rbiExCor_baseCorrosionRate,
            "rbiExCor_finalCorrosionRate" => $this->rbiExCor_finalCorrosionRate,
            "rbiExCor_shellTimeInService" => $this->rbiExCor_shellTimeInService,
            "rbiExCor_headTimeInService" => $this->rbiExCor_headTimeInService,
            "rbiExCor_ageCoat" => $this->rbiExCor_ageCoat,
            "rbiExCor_adjusmentCoat" => $this->rbiExCor_adjusmentCoat,
            "rbiExCor_age" => $this->rbiExCor_age,
            "rbiExCor_minReqWallThickness" => $this->rbiExCor_minReqWallThickness,
            "rbiExCor_shellDFParameter" => $this->rbiExCor_shellDFParameter,
            "rbiExCor_headDFParameter" => $this->rbiExCor_headDFParameter,
            "rbiExCor_flowStress" => $this->rbiExCor_flowStress,
            "rbiExCor_shellStrengthRatio" => $this->rbiExCor_shellStrengthRatio,
            "rbiExCor_headStrengthRatio" => $this->rbiExCor_headStrengthRatio,
            "rbiExCor_numInspA" => $this->rbiExCor_numInspA,
            "rbiExCor_numInspB" => $this->rbiExCor_numInspB,
            "rbiExCor_numInspC" => $this->rbiExCor_numInspC,
            "rbiExCor_numInspD" => $this->rbiExCor_numInspD,
        ];
    }
}
