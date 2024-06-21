<?php

namespace App\DTO\PlanThinning;

use App\Http\Requests\PlanThinning\UpdatePlanThinningRequest;

class UpdatePlanThinningDTO
{
    public function __construct(
        public readonly string $planThinning_startDate,
        public readonly string $planThinning_thickness,
        public readonly string $planThinning_corrosionAllowance,
        public readonly string $planThinning_designTemperature,
        public readonly string $planThinning_designPressure,
        public readonly string $planThinning_operatingTemperature,
        public readonly string $planThinning_operatingPressure,
        public readonly string $planThinning_designCode,
        public readonly string $planThinning_equipmentType,
        public readonly string $planThinning_componentType,
        public readonly string $planThinning_geometryData,
        public readonly string $planThinning_materialSpecification,
        public readonly string $planThinning_yieldStrength,
        public readonly string $planThinning_tensileStrength,
        public readonly string $planThinning_weldJointEfficiency,
        public readonly string $planThinning_heatTracing
    ) {
    }

    public static function fromRequest(UpdatePlanThinningRequest $request): self
    {
        return new self(
            planThinning_startDate: $request->validated("planThinning_startDate"),
            planThinning_thickness: $request->validated("planThinning_thickness"),
            planThinning_corrosionAllowance: $request->validated("planThinning_corrosionAllowance"),
            planThinning_designTemperature: $request->validated("planThinning_designTemperature"),
            planThinning_designPressure: $request->validated("planThinning_designPressure"),
            planThinning_operatingTemperature: $request->validated("planThinning_operatingTemperature"),
            planThinning_operatingPressure: $request->validated("planThinning_operatingPressure"),
            planThinning_designCode: $request->validated("planThinning_designCode"),
            planThinning_equipmentType: $request->validated("planThinning_equipmentType"),
            planThinning_componentType: $request->validated("planThinning_componentType"),
            planThinning_geometryData: $request->validated("planThinning_geometryData"),
            planThinning_materialSpecification: $request->validated("planThinning_materialSpecification"),
            planThinning_yieldStrength: $request->validated("planThinning_yieldStrength"),
            planThinning_tensileStrength: $request->validated("planThinning_tensileStrength"),
            planThinning_weldJointEfficiency: $request->validated("planThinning_weldJointEfficiency"),
            planThinning_heatTracing: $request->validated("planThinning_heatTracing")
        );
    }

    public function build(): array
    {
        $arr = [
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

        // if (!is_null($this->year)) {
        //     $arr['year'] = $this->year;
        // }

        return $arr;
    }
}
