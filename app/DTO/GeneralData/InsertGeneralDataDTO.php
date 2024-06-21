<?php

namespace App\DTO\GeneralData;

use App\Http\Requests\GeneralData\CreateGeneralDataRequest;
use Illuminate\Support\Str;

class InsertGeneralDataDTO
{
    public function __construct(
        public readonly string $gData_componentId,
        public readonly string $gData_tagNumber,
        public readonly string $gData_service,
        public readonly string $gData_manufacturedBy,
        public readonly string $gData_typeOfPressureVessel,
        public readonly string $gData_geometryData,
        public readonly string $gData_code,
        public readonly string $gData_designPressure,
        public readonly string $gData_designTemperature,
        public readonly string $gData_operatingPressure,
        public readonly string $gData_operatingTemperature,
        public readonly string $gData_dimmension,
        public readonly string $gData_vesselVolume,
        public readonly string $gData_support,
        public readonly string $gData_jointEfficiency,
        public readonly string $gData_corrosionAllowance,
        public readonly string $gData_yearBuilt,
        public readonly string $gData_material,
        public readonly string $gData_lastInspection,
        public readonly string $gData_shellTagNumber,
        public readonly string $gData_shellService,
        public readonly string $gData_shellCode,
        public readonly string $gData_shellDesignPressure,
        public readonly string $gData_shellDesignTemperature,
        public readonly string $gData_shellOuterDiameter,
        public readonly string $gData_shellMaterial,
        public readonly string $gData_shellAllowableStress,
        public readonly string $gData_shellEfficiency,
        public readonly string $gData_shellCorrosionAllowance,
        public readonly string $gData_shellMinimumThickness,
        public readonly string $gData_shellCorrosionRate,
        public readonly string $gData_headTagNumber,
        public readonly string $gData_headService,
        public readonly string $gData_headCode,
        public readonly string $gData_headDesignPressure,
        public readonly string $gData_headDesignTemperature,
        public readonly string $gData_headOuterDiameter,
        public readonly string $gData_headMaterial,
        public readonly string $gData_headAllowableStress,
        public readonly string $gData_headEfficiency,
        public readonly string $gData_headCorrosionAllowance,
        public readonly string $gData_headMinimumThickness,
        public readonly string $gData_headCorrosionRate,
    ) {
    }

    public static function fromRequest(CreateGeneralDataRequest $request): self
    {
        return new self(
            gData_componentId: $request->validated('gData_componentId'),
            gData_tagNumber: $request->validated('gData_tagNumber'),
            gData_service: $request->validated('gData_service'),
            gData_manufacturedBy: $request->validated('gData_manufacturedBy'),
            gData_typeOfPressureVessel: $request->validated('gData_typeOfPressureVessel'),
            gData_geometryData: $request->validated('gData_geometryData'),
            gData_code: $request->validated('gData_code'),
            gData_designPressure: $request->validated('gData_designPressure'),
            gData_designTemperature: $request->validated('gData_designTemperature'),
            gData_operatingPressure: $request->validated('gData_operatingPressure'),
            gData_operatingTemperature: $request->validated('gData_operatingTemperature'),
            gData_dimmension: $request->validated('gData_dimmension'),
            gData_vesselVolume: $request->validated('gData_vesselVolume'),
            gData_support: $request->validated('gData_support'),
            gData_jointEfficiency: $request->validated('gData_jointEfficiency'),
            gData_corrosionAllowance: $request->validated('gData_corrosionAllowance'),
            gData_yearBuilt: $request->validated('gData_yearBuilt'),
            gData_material: $request->validated('gData_material'),
            gData_lastInspection: $request->validated('gData_lastInspection'),
            gData_shellTagNumber: $request->validated('gData_shellTagNumber'),
            gData_shellService: $request->validated('gData_shellService'),
            gData_shellCode: $request->validated('gData_shellCode'),
            gData_shellDesignPressure: $request->validated('gData_shellDesignPressure'),
            gData_shellDesignTemperature: $request->validated('gData_shellDesignTemperature'),
            gData_shellOuterDiameter: $request->validated('gData_shellOuterDiameter'),
            gData_shellMaterial: $request->validated('gData_shellMaterial'),
            gData_shellAllowableStress: $request->validated('gData_shellAllowableStress'),
            gData_shellEfficiency: $request->validated('gData_shellEfficiency'),
            gData_shellCorrosionAllowance: $request->validated('gData_shellCorrosionAllowance'),
            gData_shellMinimumThickness: $request->validated('gData_shellMinimumThickness'),
            gData_shellCorrosionRate: $request->validated('gData_shellCorrosionRate'),
            gData_headTagNumber: $request->validated('gData_headTagNumber'),
            gData_headService: $request->validated('gData_headService'),
            gData_headCode: $request->validated('gData_headCode'),
            gData_headDesignPressure: $request->validated('gData_headDesignPressure'),
            gData_headDesignTemperature: $request->validated('gData_headDesignTemperature'),
            gData_headOuterDiameter: $request->validated('gData_headOuterDiameter'),
            gData_headMaterial: $request->validated('gData_headMaterial'),
            gData_headAllowableStress: $request->validated('gData_headAllowableStress'),
            gData_headEfficiency: $request->validated('gData_headEfficiency'),
            gData_headCorrosionAllowance: $request->validated('gData_headCorrosionAllowance'),
            gData_headMinimumThickness: $request->validated('gData_headMinimumThickness'),
            gData_headCorrosionRate: $request->validated('gData_headCorrosionRate'),
        );
    }

    public function build(): array
    {
        return [
            'gData_id' => Str::random(9),
            // "gData_componentId" => $this->gData_componentId,
            "gData_tagNumber" => $this->gData_tagNumber,
            "gData_service" => $this->gData_service,
            "gData_manufacturedBy" => $this->gData_manufacturedBy,
            "gData_typeOfPressureVessel" => $this->gData_typeOfPressureVessel,
            "gData_geometryData" => $this->gData_geometryData,
            "gData_code" => $this->gData_code,
            "gData_designPressure" => $this->gData_designPressure,
            "gData_designTemperature" => $this->gData_designTemperature,
            "gData_operatingPressure" => $this->gData_operatingPressure,
            "gData_operatingTemperature" => $this->gData_operatingTemperature,
            "gData_dimmension" => $this->gData_dimmension,
            "gData_vesselVolume" => $this->gData_vesselVolume,
            "gData_support" => $this->gData_support,
            "gData_jointEfficiency" => $this->gData_jointEfficiency,
            "gData_corrosionAllowance" => $this->gData_corrosionAllowance,
            "gData_yearBuilt" => $this->gData_yearBuilt,
            "gData_material" => $this->gData_material,
            "gData_lastInspection" => $this->gData_lastInspection,
            "gData_shellTagNumber" => $this->gData_shellTagNumber,
            "gData_shellService" => $this->gData_shellService,
            "gData_shellCode" => $this->gData_shellCode,
            "gData_shellDesignPressure" => $this->gData_shellDesignPressure,
            "gData_shellDesignTemperature" => $this->gData_shellDesignTemperature,
            "gData_shellOuterDiameter" => $this->gData_shellOuterDiameter,
            "gData_shellMaterial" => $this->gData_shellMaterial,
            "gData_shellAllowableStress" => $this->gData_shellAllowableStress,
            "gData_shellEfficiency" => $this->gData_shellEfficiency,
            "gData_shellCorrosionAllowance" => $this->gData_shellCorrosionAllowance,
            "gData_shellMinimumThickness" => $this->gData_shellMinimumThickness,
            "gData_shellCorrosionRate" => $this->gData_shellCorrosionRate,
            "gData_headTagNumber" => $this->gData_headTagNumber,
            "gData_headService" => $this->gData_headService,
            "gData_headCode" => $this->gData_headCode,
            "gData_headDesignPressure" => $this->gData_headDesignPressure,
            "gData_headDesignTemperature" => $this->gData_headDesignTemperature,
            "gData_headOuterDiameter" => $this->gData_headOuterDiameter,
            "gData_headMaterial" => $this->gData_headMaterial,
            "gData_headAllowableStress" => $this->gData_headAllowableStress,
            "gData_headEfficiency" => $this->gData_headEfficiency,
            "gData_headCorrosionAllowance" => $this->gData_headCorrosionAllowance,
            "gData_headMinimumThickness" => $this->gData_headMinimumThickness,
            "gData_headCorrosionRate" => $this->gData_headCorrosionRate,
        ];
    }
}
