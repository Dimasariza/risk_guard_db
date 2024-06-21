<?php

namespace App\DTO\Items;

use App\Http\Requests\RBIThinning\UpdateRBIThinningRequest;

class UpdateRBIThinningDTO
{
    public function __construct(
        public readonly string $rbiThinning_startDate,
        public readonly string $rbiThinning_thickness,
        public readonly string $rbiThinning_corrosionAllowance,
        public readonly string $rbiThinning_designTemperature,
        public readonly string $rbiThinning_designPressure,
        public readonly string $rbiThinning_operatingTemperature,
        public readonly string $rbiThinning_operatingPressure,
        public readonly string $rbiThinning_designCode,
        public readonly string $rbiThinning_equipmentType,
        public readonly string $rbiThinning_componentType,
        public readonly string $rbiThinning_geometryData,
        public readonly string $rbiThinning_materialSpecification,
        public readonly string $rbiThinning_yieldStrength,
        public readonly string $rbiThinning_tensileStrength,
        public readonly string $rbiThinning_weldJointEfficiency,
        public readonly string $rbiThinning_heatTracing,
    ) {
    }

    public static function fromRequest(UpdateRBIThinningRequest $request): self
    {
        return new self(
            rbiThinning_startDate: $request->validated("rbiThinning_startDate"),
            rbiThinning_thickness: $request->validated("rbiThinning_thickness"),
            rbiThinning_corrosionAllowance: $request->validated("rbiThinning_corrosionAllowance"),
            rbiThinning_designTemperature: $request->validated("rbiThinning_designTemperature"),
            rbiThinning_designPressure: $request->validated("rbiThinning_designPressure"),
            rbiThinning_operatingTemperature: $request->validated("rbiThinning_operatingTemperature"),
            rbiThinning_operatingPressure: $request->validated("rbiThinning_operatingPressure"),
            rbiThinning_designCode: $request->validated("rbiThinning_designCode"),
            rbiThinning_equipmentType: $request->validated("rbiThinning_equipmentType"),
            rbiThinning_componentType: $request->validated("rbiThinning_componentType"),
            rbiThinning_geometryData: $request->validated("rbiThinning_geometryData"),
            rbiThinning_materialSpecification: $request->validated("rbiThinning_materialSpecification"),
            rbiThinning_yieldStrength: $request->validated("rbiThinning_yieldStrength"),
            rbiThinning_tensileStrength: $request->validated("rbiThinning_tensileStrength"),
            rbiThinning_weldJointEfficiency: $request->validated("rbiThinning_weldJointEfficiency"),
            rbiThinning_heatTracing: $request->validated("rbiThinning_heatTracing"),
        );
    }

    public function build(): array
    {
        $arr = [
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

        // if (!is_null($this->year)) {
        //     $arr['year'] = $this->year;
        // }

        return $arr;
    }
}
