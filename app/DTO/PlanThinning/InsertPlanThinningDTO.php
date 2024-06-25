<?php

namespace App\DTO\PlanThinning;

use App\Http\Requests\PlanThinning\CreatePlanThinningRequest;
use Illuminate\Support\Str;

class InsertPlanThinningDTO
{
    public function __construct(
        public readonly string $planThinning_componentId,
        public readonly ?string $planThinning_startDate = null,
        public readonly ?string $planThinning_thickness = null,
        public readonly ?string $planThinning_corrosionAllowance = null,
        public readonly ?string $planThinning_designTemperature = null,
        public readonly ?string $planThinning_designPressure = null,
        public readonly ?string $planThinning_operatingTemperature = null,
        public readonly ?string $planThinning_operatingPressure = null,
        public readonly ?string $planThinning_designCode = null,
        public readonly ?string $planThinning_equipmentType = null,
        public readonly ?string $planThinning_componentType = null,
        public readonly ?string $planThinning_geometryData = null,
        public readonly ?string $planThinning_materialSpecification = null,
        public readonly ?string $planThinning_yieldStrength = null,
        public readonly ?string $planThinning_tensileStrength = null,
        public readonly ?string $planThinning_weldJointEfficiency = null,
        public readonly ?string $planThinning_heatTracing = null
    ) {
    }

    public static function fromRequest(CreatePlanThinningRequest $request): self
    {
        return new self(
            planThinning_componentId: $request->validated("planThinning_componentId"),
            // planThinning_startDate: $request->validated("planThinning_startDate"),
            // planThinning_thickness: $request->validated("planThinning_thickness"),
            // planThinning_corrosionAllowance: $request->validated("planThinning_corrosionAllowance"),
            // planThinning_designTemperature: $request->validated("planThinning_designTemperature"),
            // planThinning_designPressure: $request->validated("planThinning_designPressure"),
            // planThinning_operatingTemperature: $request->validated("planThinning_operatingTemperature"),
            // planThinning_operatingPressure: $request->validated("planThinning_operatingPressure"),
            // planThinning_designCode: $request->validated("planThinning_designCode"),
            // planThinning_equipmentType: $request->validated("planThinning_equipmentType"),
            // planThinning_componentType: $request->validated("planThinning_componentType"),
            // planThinning_geometryData: $request->validated("planThinning_geometryData"),
            // planThinning_materialSpecification: $request->validated("planThinning_materialSpecification"),
            // planThinning_yieldStrength: $request->validated("planThinning_yieldStrength"),
            // planThinning_tensileStrength: $request->validated("planThinning_tensileStrength"),
            // planThinning_weldJointEfficiency: $request->validated("planThinning_weldJointEfficiency"),
            // planThinning_heatTracing: $request->validated("planThinning_heatTracing")
        );
    }

    public function build(): array
    {
        return [
            "planThinning_id" => Str::random(9),
            "planThinning_componentId" => $this->planThinning_componentId,
            "planThinning_startDate" => $this->planThinning_startDate,
            "planThinning_thickness" => $this->planThinning_thickness,
            "planThinning_corrosionAllowance" => $this->planThinning_corrosionAllowance,
            "planThinning_designTemperature" => $this->planThinning_designTemperature,
            "planThinning_designPressure" => $this->planThinning_designPressure,
            "planThinning_operatingTemperature" => $this->planThinning_operatingTemperature,
            "planThinning_operatingPressure" => $this->planThinning_operatingPressure,
            "planThinning_designCode" => $this->planThinning_designCode,
            "planThinning_equipmentType" => $this->planThinning_equipmentType,
            "planThinning_componentType" => $this->planThinning_componentType,
            "planThinning_geometryData" => $this->planThinning_geometryData,
            "planThinning_materialSpecification" => $this->planThinning_materialSpecification,
            "planThinning_yieldStrength" => $this->planThinning_yieldStrength,
            "planThinning_tensileStrength" => $this->planThinning_tensileStrength,
            "planThinning_weldJointEfficiency" => $this->planThinning_weldJointEfficiency,
            "planThinning_heatTracing" => $this->planThinning_heatTracing,
        ];
    }
}
