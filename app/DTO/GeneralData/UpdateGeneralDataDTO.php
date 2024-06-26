<?php

namespace App\DTO\GeneralData;

use App\Http\Requests\GeneralData\UpdateGeneralDataRequest;

class UpdateGeneralDataDTO
{
    public function __construct(
        public readonly ?string $gData_tagNumber = null,
        public readonly ?string $gData_service = null,
        public readonly ?string $gData_manufacturedBy = null,
        public readonly ?string $gData_positionType = null,
        public readonly ?string $gData_shapeType = null,
        public readonly ?string $gData_geometryData = null,
        public readonly ?string $gData_code = null,
        public readonly ?string $gData_designPressure = null,
        public readonly ?string $gData_designTemperature = null,
        public readonly ?string $gData_operatingPressure = null,
        public readonly ?string $gData_operatingTemperature = null,
        public readonly ?string $gData_dimensionLength = null,
        public readonly ?string $gData_dimensionWidth = null,
        public readonly ?string $gData_vesselVolumeLB = null,
        public readonly ?string $gData_vesselVolumeKG = null,
        public readonly ?string $gData_support = null,
        public readonly ?string $gData_jointEfficiency = null,
        public readonly ?string $gData_corrosionAllowanceMM = null,
        public readonly ?string $gData_corrosionAllowanceInch = null,
        public readonly ?string $gData_yearBuilt = null,
        public readonly ?string $gData_material = null,
        public readonly ?string $gData_lastInspection = null,
        public readonly ?string $gData_outerDiameterMM = null,
        public readonly ?string $gData_outerDiameterInch = null,
        public readonly ?string $gData_allowableStressPsig = null,
        public readonly ?string $gData_allowableStressBar = null,
        public readonly ?string $gData_allowableStressKpa = null,
        public readonly ?string $gData_efficiency = null,
        public readonly ?string $gData_shellCode = null,
        public readonly ?string $gData_shellMinimumThicknessMM = null,
        public readonly ?string $gData_shellMinimumThicknessInch = null,
        public readonly ?string $gData_shellCorrosionRateMM = null,
        public readonly ?string $gData_shellCorrosionRateInch = null,
        public readonly ?string $gData_headCode = null,
        public readonly ?string $gData_headMinimumThicknessMM = null,
        public readonly ?string $gData_headMinimumThicknessInch = null,
        public readonly ?string $gData_headCorrosionRateMM = null,
        public readonly ?string $gData_headCorrosionRateInch = null,
    ) {
    }

    public static function fromRequest(UpdateGeneralDataRequest $request): self
    {
        return new self(
            gData_tagNumber: $request->validated('gData_tagNumber'),
            gData_service: $request->validated('gData_service'),
            gData_manufacturedBy: $request->validated('gData_manufacturedBy'),
            gData_positionType: $request->validated('gData_positionType'),
            gData_shapeType: $request->validated('gData_shapeType'),
            gData_geometryData: $request->validated('gData_geometryData'),
            gData_code: $request->validated('gData_code'),
            gData_designPressure: $request->validated('gData_designPressure'),
            gData_designTemperature: $request->validated('gData_designTemperature'),
            gData_operatingPressure: $request->validated('gData_operatingPressure'),
            gData_operatingTemperature: $request->validated('gData_operatingTemperature'),
            gData_dimensionLength: $request->validated('gData_dimensionLength'),
            gData_dimensionWidth: $request->validated('gData_dimensionWidth'),
            gData_vesselVolumeLB: $request->validated('gData_vesselVolumeLB'),
            gData_vesselVolumeKG: $request->validated('gData_vesselVolumeKG'),
            gData_support: $request->validated('gData_support'),
            gData_jointEfficiency: $request->validated('gData_jointEfficiency'),
            gData_corrosionAllowanceMM: $request->validated('gData_corrosionAllowanceMM'),
            gData_corrosionAllowanceInch: $request->validated('gData_corrosionAllowanceInch'),
            gData_yearBuilt: $request->validated('gData_yearBuilt'),
            gData_material: $request->validated('gData_material'),
            gData_lastInspection: $request->validated('gData_lastInspection'),
            gData_outerDiameterMM: $request->validated('gData_outerDiameterMM'),
            gData_outerDiameterInch: $request->validated('gData_outerDiameterInch'),
            gData_allowableStressPsig: $request->validated('gData_allowableStressPsig'),
            gData_allowableStressBar: $request->validated('gData_allowableStressBar'),
            gData_allowableStressKpa: $request->validated('gData_allowableStressKpa'),
            gData_efficiency: $request->validated('gData_efficiency'),
            gData_shellCode: $request->validated('gData_shellCode'),
            gData_shellMinimumThicknessMM: $request->validated('gData_shellMinimumThicknessMM'),
            gData_shellMinimumThicknessInch: $request->validated('gData_shellMinimumThicknessInch'),
            gData_shellCorrosionRateMM: $request->validated('gData_shellCorrosionRateMM'),
            gData_shellCorrosionRateInch: $request->validated('gData_shellCorrosionRateInch'),
            gData_headCode: $request->validated('gData_headCode'),
            gData_headMinimumThicknessMM: $request->validated('gData_headMinimumThicknessMM'),
            gData_headMinimumThicknessInch: $request->validated('gData_headMinimumThicknessInch'),
            gData_headCorrosionRateMM: $request->validated('gData_headCorrosionRateMM'),
            gData_headCorrosionRateInch: $request->validated('gData_headCorrosionRateInch'),
        );
    }

    public function build(): array
    {
        $arr = [
            "gData_tagNumber" => $this->gData_tagNumber,
            "gData_service" => $this->gData_service,
            "gData_manufacturedBy" => $this->gData_manufacturedBy,
            "gData_positionType" => $this->gData_positionType,
            "gData_shapeType" => $this->gData_shapeType,
            "gData_geometryData" => $this->gData_geometryData,
            "gData_code" => $this->gData_code,
            "gData_designPressure" => $this->gData_designPressure,
            "gData_designTemperature" => $this->gData_designTemperature,
            "gData_operatingPressure" => $this->gData_operatingPressure,
            "gData_operatingTemperature" => $this->gData_operatingTemperature,
            "gData_dimensionLength" => $this->gData_dimensionLength,
            "gData_dimensionWidth" => $this->gData_dimensionWidth,
            "gData_vesselVolumeLB" => $this->gData_vesselVolumeLB,
            "gData_vesselVolumeKG" => $this->gData_vesselVolumeKG,
            "gData_support" => $this->gData_support,
            "gData_jointEfficiency" => $this->gData_jointEfficiency,
            "gData_corrosionAllowanceMM" => $this->gData_corrosionAllowanceMM,
            "gData_corrosionAllowanceInch" => $this->gData_corrosionAllowanceInch,
            "gData_yearBuilt" => $this->gData_yearBuilt,
            "gData_material" => $this->gData_material,
            "gData_lastInspection" => $this->gData_lastInspection,
            "gData_outerDiameterMM" => $this->gData_outerDiameterMM,
            "gData_outerDiameterInch" => $this->gData_outerDiameterInch,
            "gData_allowableStressPsig" => $this->gData_allowableStressPsig,
            "gData_allowableStressBar" => $this->gData_allowableStressBar,
            "gData_allowableStressKpa" => $this->gData_allowableStressKpa,
            "gData_efficiency" => $this->gData_efficiency,
            "gData_shellCode" => $this->gData_shellCode,
            "gData_shellMinimumThicknessMM" => $this->gData_shellMinimumThicknessMM,
            "gData_shellMinimumThicknessInch" => $this->gData_shellMinimumThicknessInch,
            "gData_shellCorrosionRateMM" => $this->gData_shellCorrosionRateMM,
            "gData_shellCorrosionRateInch" => $this->gData_shellCorrosionRateInch,
            "gData_headCode" => $this->gData_headCode,
            "gData_headMinimumThicknessMM" => $this->gData_headMinimumThicknessMM,
            "gData_headMinimumThicknessInch" => $this->gData_headMinimumThicknessInch,
            "gData_headCorrosionRateMM" => $this->gData_headCorrosionRateMM,
            "gData_headCorrosionRateInch" => $this->gData_headCorrosionRateInch,
        ];

        // if (!is_null($this->year)) {
        //     $arr['year'] = $this->year;
        // }

        return $arr;
    }
}
