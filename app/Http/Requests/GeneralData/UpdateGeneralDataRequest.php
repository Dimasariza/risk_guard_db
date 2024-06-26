<?php

namespace App\Http\Requests\GeneralData;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGeneralDataRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // "gData_componentId" => ['string', 'max:255'],
            "gData_tagNumber" => ['nullable', 'string', 'max:255'],
            "gData_service" => ['nullable', 'string', 'max:255'],
            "gData_manufacturedBy" => ['nullable', 'string', 'max:255'],
            "gData_positionType" => ['nullable', 'string', 'max:255'],
            "gData_shapeType" => ['nullable', 'string', 'max:255'],
            "gData_geometryData" => ['nullable', 'string', 'max:255'],
            "gData_code" => ['nullable', 'string', 'max:255'],
            /*regex*/"gData_designPressure" => ['nullable', 'regex:/^\d+(\.\d{1,5})?$/'],
            /*regex*/"gData_designTemperature" => ['nullable', 'regex:/^\d+(\.\d{1,5})?$/'],
            /*regex*/"gData_operatingPressure" => ['nullable', 'regex:/^\d+(\.\d{1,5})?$/'],
            /*regex*/"gData_operatingTemperature" => ['nullable', 'regex:/^\d+(\.\d{1,5})?$/'],
            "gData_dimensionLength" => ['nullable', 'integer'],
            "gData_dimensionWidth" => ['nullable', 'integer'],
            "gData_vesselVolumeLB" => ['nullable', 'integer'],
            "gData_vesselVolumeKG" => ['nullable', 'integer'],
            "gData_support" => ['nullable', 'string'],
            /*regex*/"gData_jointEfficiency" => ['nullable', 'regex:/^\d+(\.\d{1,5})?$/'],
            /*regex*/"gData_corrosionAllowanceMM" => ['nullable', 'regex:/^\d+(\.\d{1,5})?$/'],
            /*regex*/"gData_corrosionAllowanceInch" => ['nullable', 'regex:/^\d+(\.\d{1,5})?$/'],
            "gData_yearBuilt" => ['nullable', 'integer'],
            "gData_material" => ['nullable', 'string', 'max:255'],
            "gData_lastInspection" => ['nullable', 'date', 'max:255'],
            /*regex*/"gData_outerDiameterMM" => ['nullable', 'regex:/^\d+(\.\d{1,5})?$/'],
            /*regex*/"gData_outerDiameterInch" => ['nullable', 'regex:/^\d+(\.\d{1,5})?$/'],
            /*regex*/"gData_allowableStressPsig" => ['nullable', 'regex:/^\d+(\.\d{1,5})?$/'],
            /*regex*/"gData_allowableStressBar" => ['nullable', 'regex:/^\d+(\.\d{1,5})?$/'],
            /*regex*/"gData_allowableStressKpa" => ['nullable', 'regex:/^\d+(\.\d{1,5})?$/'],
            /*regex*/"gData_efficiency" => ['nullable', 'regex:/^\d+(\.\d{1,5})?$/'],
            
            "gData_shellCode" => ['nullable', 'string', 'max:255'],
            /*regex*/"gData_shellMinimumThicknessMM" => ['nullable', 'regex:/^\d+(\.\d{1,5})?$/'],
            /*regex*/"gData_shellMinimumThicknessInch" => ['nullable', 'regex:/^\d+(\.\d{1,5})?$/'],
            /*regex*/"gData_shellCorrosionRateMM" => ['nullable', 'regex:/^\d+(\.\d{1,5})?$/'],
            /*regex*/"gData_shellCorrosionRateInch" => ['nullable', 'regex:/^\d+(\.\d{1,5})?$/'],

            "gData_headCode" => ['nullable', 'string', 'max:255'],
            /*regex*/"gData_headMinimumThicknessMM" => ['nullable', 'regex:/^\d+(\.\d{1,5})?$/'],
            /*regex*/"gData_headMinimumThicknessInch" => ['nullable', 'regex:/^\d+(\.\d{1,5})?$/'],
            /*regex*/"gData_headCorrosionRateMM" => ['nullable', 'regex:/^\d+(\.\d{1,5})?$/'],
            /*regex*/"gData_headCorrosionRateInch" => ['nullable', 'regex:/^\d+(\.\d{1,5})?$/'],
        ];
    }

    public function messages()
    {
        return [
            "gData_tagNumber.string" => "Tag number must be a string type",
            "gData_service.string" => "must be a string type",
            "gData_manufacturedBy.string" => "must be a string type",
            "gData_positionType.string" => "must be a string type",
            "gData_positionType.string" => "must be a string type",
            "gData_shapeType.string" => "must be a string type",
            "gData_geometryData.string" => "must be a string type",
            "gData_code.string" => "must be a string type",

            'gData_designPressure.regex' => 'Design Pressure must be a float type',
            'gData_designTemperature.regex' => 'Design Temperature must be a float type',
            'gData_operatingPressure.regex' => 'Operating Pressure must be a float type',
            'gData_operatingTemperature.regex' => 'Operating Temperature must be a float type',

            'gData_dimensionLength.integer' => 'Dimension Length must be a string type',
            'gData_dimensionWidth.integer' => 'Dimension Width must be a string type',
            'gData_vesselVolumeLB.integer' => 'Vessel volume lb must be a integer type',
            'gData_vesselVolumeKG.integer' => 'Vessel volume kg must be a integer type',
            'gData_support.integer' => 'Support must be a integer type',

            'gData_jointEfficiency.regex' => 'Joint efficiency must be a float type',
            'gData_corrosionAllowanceMM.regex' => 'Corrosion allowance mm must be a float type',
            'gData_corrosionAllowanceInch.regex' => 'Corrosion allowance inch must be a float type',

            'gData_yearBuilt.integer' => 'Year built must be a integer type',
            'gData_material.string' => 'Material must be a string type',
            'gData_lastInspection.date' => 'Last inspection must be a date type',

            'gData_outerDiameterMM' => 'Outer diameter mm must be a float type',
            'gData_outerDiameterInch' => 'Outer diameter inch must be a float type',
            'gData_allowableStressPsig' => 'Allowable sterss psig must be a float type',
            'gData_allowableStressBar' => 'Allowable stress Bar must be a float type',
            'gData_allowableStressKpa' => 'Allowable stress Kpa must be a float type',
            'gData_efficiency' => 'Efficiency must be a float type',

            'gData_shellCode' => 'Shell Code must be a string type',
            'gData_shellMinimumThicknessMM' => 'Shell minimum thickness mm must be a float type',
            'gData_shellMinimumThicknessInch' => 'Shell minimum thickness inch must be a float type',
            'gData_shellCorrosionRateMM' => 'Shell corrosion rate mm must be a float type',
            'gData_shellCorrosionRateInch' => 'Shell corrosion rate Inch must be a float type',

            'gData_headCode' => 'Head Code must be a string type',
            'gData_headMinimumThicknessMM' => 'Head minimum thickness mm must be a float type',
            'gData_headMinimumThicknessInch' => 'Head minimum thickness inch must be a float type',
            'gData_headCorrosionRateMM' => 'Head corrosion rate mm must be a float type',
            'gData_headCorrosionRateInch' => 'Head corrosion rate Inch must be a float type',
        ];
    }
}
