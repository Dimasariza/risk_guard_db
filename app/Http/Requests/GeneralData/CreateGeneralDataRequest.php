<?php

namespace App\Http\Requests\GeneralData;

use Illuminate\Foundation\Http\FormRequest;

class CreateGeneralDataRequest extends FormRequest
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
            "gData_componentId" => ['required', 'string', 'max:255'],
            "gData_tagNumber" => [],
            "gData_service" => [],
            "gData_manufacturedBy" => [],
            "gData_typeOfPressureVessel" => [],
            "gData_geometryData" => [],
            "gData_code" => [],
            "gData_designPressure" => [],
            "gData_designTemperature" => [],
            "gData_operatingPressure" => [],
            "gData_operatingTemperature" => [],
            "gData_dimmension" => [],
            "gData_vesselVolume" => [],
            "gData_support" => [],
            "gData_jointEfficiency" => ['integer'],
            "gData_corrosionAllowance" => [],
            "gData_yearBuilt" => [],
            "gData_material" => [],
            "gData_lastInspection" => [],
            "gData_shellTagNumber" => [],
            "gData_shellService" => [],
            "gData_shellCode" => [],
            "gData_shellDesignPressure" => [],
            "gData_shellDesignTemperature" => [],
            "gData_shellOuterDiameter" => [],
            "gData_shellMaterial" => [],
            "gData_shellAllowableStress" => [],
            "gData_shellEfficiency" => [],
            "gData_shellCorrosionAllowance" => [],
            "gData_shellMinimumThickness" => [],
            "gData_shellCorrosionRate" => [],
            "gData_headTagNumber" => [],
            "gData_headService" => [],
            "gData_headCode" => [],
            "gData_headDesignPressure" => [],
            "gData_headDesignTemperature" => [],
            "gData_headOuterDiameter" => [],
            "gData_headMaterial" => [],
            "gData_headAllowableStress" => [],
            "gData_headEfficiency" => [],
            "gData_headCorrosionAllowance" => [],
            "gData_headMinimumThickness" => [],
            "gData_headCorrosionRate" => [],
        ];
    }

    /**
     * Get the custom error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            // 'gData_designPressure.regex' => 'Design Pressure must be a float type',
            // 'gData_designTemperature.regex' => 'Design Temperature must be a float type',
            // 'gData_operatingPressure.regex' => 'Operating Pressure must be a float type',
            // 'gData_operatingTemperature.regex' => 'Operating Temperature must be a float type',
            // 'gData_corrosionAllowance.regex' => 'Corrosion Allowance must be a float type',
            // 'gData_shellDesignPressure.regex' => 'Shell Design Pressure must be a float type',
            // 'gData_shellDesignTemperature.regex' => 'Shell Design Temperature must be a float type',
            // 'gData_shellMinimumThickness.regex' => 'Shell Minimum Thickness must be a float type',
            // 'gData_shellCorrosionRate.regex' => 'Shell Corrosion Rate must be a float type',
            // 'gData_headDesignPressure.regex' => 'Head Design Pressure must be a float type',
            // 'gData_headDesignTemperature.regex' => 'Head Design Temperature must be a float type',
            // 'gData_headCorrosionAllowance.regex' => 'Head Corrosion Allowance must be a float type',
            // 'gData_headMinimumThickness.regex' => 'Head Minimum Thickness must be a float type',
            // 'gData_headCorrosionRate.regex' => 'Head Corrosion Rate must be a float type',
        ];
    }
}
