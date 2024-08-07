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
            "gData_startingDate" => ['nullable', 'date', 'max:255'],
            "gData_service" => ['nullable', 'string', 'max:255'],
            "gData_manufacturedBy" => ['nullable', 'string', 'max:255'],
            "gData_positionType" => ['nullable', 'string', 'max:255'],
            "gData_shapeType" => ['nullable', 'string', 'max:255'],
            "gData_geometryData" => ['nullable', 'string', 'max:255'],
            "gData_code" => ['nullable', 'string', 'max:255'],
            "gData_setPressurePsig" => ['nullable', 'string', 'max:255'],
            "gData_reliefingTemperatureF" => ['nullable', 'string', 'max:255'],
            "gData_allowableOverPress" => ['nullable', 'string', 'max:255'],
            /*regex*/"gData_designPressureBar" => ['nullable', 'regex:/^-?\d+(\.\d{1,10})?$/'],
            /*regex*/"gData_designPressurePsi" => ['nullable', 'regex:/^-?\d+(\.\d{1,10})?$/'],
            /*regex*/"gData_designTemperatureC" => ['nullable', 'regex:/^-?\d+(\.\d{1,10})?$/'],
            /*regex*/"gData_designTemperatureR" => ['nullable', 'regex:/^-?\d+(\.\d{1,10})?$/'],
            /*regex*/"gData_designTemperatureF" => ['nullable', 'regex:/^-?\d+(\.\d{1,10})?$/'],
            /*regex*/"gData_designTemperatureK" => ['nullable', 'regex:/^-?\d+(\.\d{1,10})?$/'],
            /*regex*/"gData_operatingPressureBar" => ['nullable', 'regex:/^-?\d+(\.\d{1,10})?$/'],
            /*regex*/"gData_operatingPressurePsi" => ['nullable', 'regex:/^-?\d+(\.\d{1,10})?$/'],
            /*regex*/"gData_operatingTemperatureC" => ['nullable', 'regex:/^-?\d+(\.\d{1,10})?$/'],
            /*regex*/"gData_operatingTemperatureR" => ['nullable', 'regex:/^-?\d+(\.\d{1,10})?$/'],
            /*regex*/"gData_operatingTemperatureF" => ['nullable', 'regex:/^-?\d+(\.\d{1,10})?$/'],
            /*regex*/"gData_operatingTemperatureK" => ['nullable', 'regex:/^-?\d+(\.\d{1,10})?$/'],
            "gData_dimensionLength" => ['nullable', 'integer'],
            "gData_dimensionWidth" => ['nullable', 'integer'],
            "gData_vesselVolumeLB" => ['nullable', 'regex:/^-?\d+(\.\d{1,10})?$/'],
            /*regex*/"gData_vesselVolumeKG" => ['nullable', 'regex:/^-?\d+(\.\d{1,10})?$/'],
            /*regex*/"gData_support" => ['nullable', 'string'],
            /*regex*/"gData_jointEfficiency" => ['nullable', 'regex:/^-?\d+(\.\d{1,10})?$/'],
            /*regex*/"gData_yieldStrength" => ['nullable', 'regex:/^-?\d+(\.\d{1,10})?$/'],
            /*regex*/"gData_tensileStrength" => ['nullable', 'regex:/^-?\d+(\.\d{1,10})?$/'],
            /*regex*/"gData_corrosionAllowanceMM" => ['nullable', 'regex:/^-?\d+(\.\d{1,10})?$/'],
            /*regex*/"gData_corrosionAllowanceInch" => ['nullable', 'regex:/^-?\d+(\.\d{1,10})?$/'],
            "gData_yearBuilt" => ['nullable', 'integer'],
            "gData_material" => ['nullable', 'string', 'max:255'],
            "gData_lastInspection" => ['nullable', 'date', 'max:255'],
            /*regex*/"gData_nominalThicknessMM" => ['nullable', 'regex:/^-?\d+(\.\d{1,10})?$/', 'max:255'],
            /*regex*/"gData_thickAfterInspMM" => ['nullable', 'regex:/^-?\d+(\.\d{1,10})?$/', 'max:255'],
            /*regex*/"gData_outerDiameterMM" => ['nullable', 'regex:/^-?\d+(\.\d{1,10})?$/'],
            /*regex*/"gData_outerDiameterInch" => ['nullable', 'regex:/^-?\d+(\.\d{1,10})?$/'],
            /*regex*/"gData_allowableStressPsig" => ['nullable', 'regex:/^-?\d+(\.\d{1,10})?$/'],
            /*regex*/"gData_allowableStressBar" => ['nullable', 'regex:/^-?\d+(\.\d{1,10})?$/'],
            /*regex*/"gData_allowableStressKpa" => ['nullable', 'regex:/^-?\d+(\.\d{1,10})?$/'],
            /*regex*/"gData_efficiency" => ['nullable', 'regex:/^-?\d+(\.\d{1,10})?$/'],
            
            "gData_shellCode" => ['nullable', 'string', 'max:255'],
            /*regex*/"gData_shellMinimumThicknessMM" => ['nullable', 'regex:/^-?\d+(\.\d{1,10})?$/'],
            /*regex*/"gData_shellMinimumThicknessInch" => ['nullable', 'regex:/^-?\d+(\.\d{1,10})?$/'],
            /*regex*/"gData_shellCorrosionRateMM" => ['nullable', 'regex:/^-?\d+(\.\d{1,10})?$/'],
            /*regex*/"gData_shellCorrosionRateInch" => ['nullable', 'regex:/^-?\d+(\.\d{1,10})?$/'],
            /*regex*/"gData_shellTreqInch" => ['nullable', 'regex:/^-?\d+(\.\d{1,10})?$/'],
            /*regex*/"gData_shellTreqMM" => ['nullable', 'regex:/^-?\d+(\.\d{1,10})?$/'],
            /*regex*/"gData_shellMAWP" => ['nullable', 'regex:/^-?\d+(\.\d{1,10})?$/'],

            "gData_headCode" => ['nullable', 'string', 'max:255'],
            /*regex*/"gData_headMinimumThicknessMM" => ['nullable', 'regex:/^-?\d+(\.\d{1,10})?$/'],
            /*regex*/"gData_headMinimumThicknessInch" => ['nullable', 'regex:/^-?\d+(\.\d{1,10})?$/'],
            /*regex*/"gData_headCorrosionRateMM" => ['nullable', 'regex:/^-?\d+(\.\d{1,10})?$/'],
            /*regex*/"gData_headCorrosionRateInch" => ['nullable', 'regex:/^-?\d+(\.\d{1,10})?$/'],
            /*regex*/"gData_headTreqInch" => ['nullable', 'regex:/^-?\d+(\.\d{1,10})?$/'],
            /*regex*/"gData_headTreqMM" => ['nullable', 'regex:/^-?\d+(\.\d{1,10})?$/'],
            /*regex*/"gData_headMAWP" => ['nullable', 'regex:/^-?\d+(\.\d{1,10})?$/'],
        ];
    }

    public function messages()
    {
        return [
            "gData_tagNumber.string" => "Tag number must be a string type",
            "gData_startingDate.string" => "Tag number must be a string type",
            "gData_service.string" => "must be a string type",
            "gData_manufacturedBy.string" => "must be a string type",
            "gData_positionType.string" => "must be a string type",
            "gData_positionType.string" => "must be a string type",
            "gData_shapeType.string" => "must be a string type",
            "gData_geometryData.string" => "must be a string type",
            "gData_code.string" => "must be a string type",
            "gData_setPressurePsig.string" => "must be a string type",
            "gData_reliefingTemperatureF.string" => "must be a string type",
            "gData_allowableOverPress.string" => "must be a string type",

            'gData_designPressureBar.regex' => 'Design Pressure must be a float type',
            'gData_designPressurePsi.regex' => 'Design Pressure must be a float type',
            'gData_designTemperatureC.regex' => 'Design Temperature must be a float type',
            'gData_designTemperatureR.regex' => 'Design Temperature must be a float type',
            'gData_designTemperatureF.regex' => 'Design Temperature must be a float type',
            'gData_designTemperatureK.regex' => 'Design Temperature must be a float type',
            'gData_operatingPressureBar.regex' => 'Operating Pressure must be a float type',
            'gData_operatingPressurePsi.regex' => 'Operating Pressure must be a float type',
            'gData_operatingTemperatureC.regex' => 'Operating Temperature must be a float type',
            'gData_operatingTemperatureR.regex' => 'Operating Temperature must be a float type',
            'gData_operatingTemperatureF.regex' => 'Operating Temperature must be a float type',
            'gData_operatingTemperatureK.regex' => 'Operating Temperature must be a float type',

            'gData_dimensionLength.integer' => 'Dimension Length must be a string type',
            'gData_dimensionWidth.integer' => 'Dimension Width must be a string type',
            'gData_vesselVolumeLB.integer' => 'Vessel volume lb must be a integer type',
            'gData_vesselVolumeKG.integer' => 'Vessel volume kg must be a integer type',
            'gData_support.integer' => 'Support must be a integer type',

            'gData_jointEfficiency.regex' => 'Joint efficiency must be a float type',
            'gData_yieldStrength.regex' => 'Joint efficiency must be a float type',
            'gData_tensileStrength.regex' => 'Joint efficiency must be a float type',
            'gData_corrosionAllowanceMM.regex' => 'Corrosion allowance mm must be a float type',
            'gData_corrosionAllowanceInch.regex' => 'Corrosion allowance inch must be a float type',

            'gData_yearBuilt.integer' => 'Year built must be a integer type',
            'gData_material.string' => 'Material must be a string type',
            'gData_lastInspection.date' => 'Last inspection must be a date type',
            'gData_nominalThicknessMM.date' => 'Nominal thickness must be a date type',
            'gData_thickAfterInspMM.date' => 'Thickness after inspection must be a date type',

            'gData_outerDiameterMM.regex' => 'Outer diameter mm must be a float type',
            'gData_outerDiameterInch.regex' => 'Outer diameter inch must be a float type',
            'gData_allowableStressPsig.regex' => 'Allowable sterss psig must be a float type',
            'gData_allowableStressBar.regex' => 'Allowable stress Bar must be a float type',
            'gData_allowableStressKpa.regex' => 'Allowable stress Kpa must be a float type',
            'gData_efficiency.regex' => 'Efficiency must be a float type',

            'gData_shellCode.string' => 'Shell Code must be a string type',
            'gData_shellMinimumThicknessMM.regex' => 'Shell minimum thickness mm must be a float type',
            'gData_shellMinimumThicknessInch.regex' => 'Shell minimum thickness inch must be a float type',
            'gData_shellCorrosionRateMM.regex' => 'Shell corrosion rate mm must be a float type',
            'gData_shellCorrosionRateInch.regex' => 'Shell corrosion rate Inch must be a float type',
            'gData_shellTreqInch.regex' => 'Shell corrosion rate Inch must be a float type',
            'gData_shellTreqMM.regex' => 'Shell corrosion rate Inch must be a float type',
            'gData_shellMAWP.regex' => 'Shell corrosion rate Inch must be a float type',

            'gData_headCode.string' => 'Head Code must be a string type',
            'gData_headMinimumThicknessMM.regex' => 'Head minimum thickness mm must be a float type',
            'gData_headMinimumThicknessInch.regex' => 'Head minimum thickness inch must be a float type',
            'gData_headCorrosionRateMM.regex' => 'Head corrosion rate mm must be a float type',
            'gData_headCorrosionRateInch.regex' => 'Head corrosion rate Inch must be a float type',
            'gData_headTreqInch.regex' => 'Head corrosion rate Inch must be a float type',
            'gData_headTreqMM.regex' => 'Head corrosion rate Inch must be a float type',
            'gData_headMAWP.regex' => 'Head corrosion rate Inch must be a float type',
        ];
    }
}
