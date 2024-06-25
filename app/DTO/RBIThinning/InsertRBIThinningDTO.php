<?php

namespace App\DTO\RBIThinning;

use App\Http\Requests\RBIThinning\CreateRBIThinningRequest;
use Illuminate\Support\Str;

class InsertRBIThinningDTO
{
    public function __construct(
        public readonly string $rbiThinning_componentId,
        public readonly ?string $rbiThinning_startDate = null,
        public readonly ?string $rbiThinning_thickness = null,
        public readonly ?string $rbiThinning_corrosionAllowance = null,
        public readonly ?string $rbiThinning_designTemperature = null,
        public readonly ?string $rbiThinning_designPressure = null,
        public readonly ?string $rbiThinning_operatingTemperature = null,
        public readonly ?string $rbiThinning_operatingPressure = null,
        public readonly ?string $rbiThinning_designCode = null,
        public readonly ?string $rbiThinning_equipmentType = null,
        public readonly ?string $rbiThinning_componentType = null,
        public readonly ?string $rbiThinning_geometryData = null,
        public readonly ?string $rbiThinning_materialSpecification = null,
        public readonly ?string $rbiThinning_yieldStrength = null,
        public readonly ?string $rbiThinning_tensileStrength = null,
        public readonly ?string $rbiThinning_weldJointEfficiency = null,
        public readonly ?string $rbiThinning_heatTracing = null,
    ) {
    }

    public static function fromRequest(CreateRBIThinningRequest $request): self
    {
        return new self(
            rbiThinning_componentId: $request->validated("rbiThinning_componentId"),
        );
    }

    public function build(): array
    {
        return [
            "rbiThinning_id" => Str::random(9),
            "rbiThinning_componentId" => $this->rbiThinning_componentId,
            "rbiThinning_startDate" => $this->rbiThinning_startDate,
            "rbiThinning_thickness" => $this->rbiThinning_thickness,
            "rbiThinning_corrosionAllowance" => $this->rbiThinning_corrosionAllowance,
            "rbiThinning_designTemperature" => $this->rbiThinning_designTemperature,
            "rbiThinning_designPressure" => $this->rbiThinning_designPressure,
            "rbiThinning_operatingTemperature" => $this->rbiThinning_operatingTemperature,
            "rbiThinning_operatingPressure" => $this->rbiThinning_operatingPressure,
            "rbiThinning_designCode" => $this->rbiThinning_designCode,
            "rbiThinning_equipmentType" => $this->rbiThinning_equipmentType,
            "rbiThinning_componentType" => $this->rbiThinning_componentType,
            "rbiThinning_geometryData" => $this->rbiThinning_geometryData,
            "rbiThinning_materialSpecification" => $this->rbiThinning_materialSpecification,
            "rbiThinning_yieldStrength" => $this->rbiThinning_yieldStrength,
            "rbiThinning_tensileStrength" => $this->rbiThinning_tensileStrength,
            "rbiThinning_weldJointEfficiency" => $this->rbiThinning_weldJointEfficiency,
            "rbiThinning_heatTracing" => $this->rbiThinning_heatTracing,
        ];
    }
}
