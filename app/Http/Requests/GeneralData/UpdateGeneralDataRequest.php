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
            "gData_componentId" => ['required', 'string', 'max:255'],
            "gData_tagNumber" => ['required', 'string', 'max:255'],
            "gData_service" => ['required', 'string', 'max:255'],
            "gData_manufacturedBy" => ['required', 'string', 'max:255'],
            "gData_typeOfPressureVessel" => ['required', 'string', 'max:255'],
            "gData_geometryData" => ['required', 'string', 'max:255'],
            "gData_code" => ['required', 'string', 'max:255'],
            "gData_designPressure" => ['required', 'regex:/^\d+(\.\d{1,5})?$/'],
            "gData_designTemperature" => ['required', 'regex:/^\d+(\.\d{1,5})?$/'],
            "gData_operatingPressure" => ['required', 'regex:/^\d+(\.\d{1,5})?$/'],
            "gData_operatingTemperature" => ['required', 'regex:/^\d+(\.\d{1,5})?$/'],
            "gData_dimmension" => ['required', 'string', 'max:255'],
            "gData_vesselVolume" => ['required', 'string', 'max:255'],
            "gData_support" => ['required', 'string', 'max:255'],
            "gData_jointEfficiency" => ['required', 'integer'],
            "gData_corrosionAllowance" => ['required', 'regex:/^\d+(\.\d{1,5})?$/'],
            "gData_yearBuilt" => ['required', 'string', 'max:255'],
            "gData_material" => ['required', 'string', 'max:255'],
            "gData_lastInspection" => ['required', 'string', 'max:255'],
            "gData_shellTagNumber" => ['required', 'string', 'max:255'],
            "gData_shellService" => ['required', 'string', 'max:255'],
            "gData_shellCode" => ['required', 'string', 'max:255'],
            "gData_shellDesignPressure" => ['required', 'regex:/^\d+(\.\d{1,5})?$/'],
            "gData_shellDesignTemperature" => ['required', 'regex:/^\d+(\.\d{1,5})?$/'],
            "gData_shellOuterDiameter" => ['required', 'string', 'max:255'],
            "gData_shellMaterial" => ['required', 'string', 'max:255'],
            "gData_shellAllowableStress" => ['required', 'string', 'max:255'],
            "gData_shellEfficiency" => ['required', 'string', 'max:255'],
            "gData_shellCorrosionAllowance" => ['required', 'regex:/^\d+(\.\d{1,5})?$/'],
            "gData_shellMinimumThickness" => ['required', 'regex:/^\d+(\.\d{1,5})?$/'],
            "gData_shellCorrosionRate" => ['required', 'regex:/^\d+(\.\d{1,5})?$/'],
            "gData_headTagNumber" => ['required', 'string', 'max:255'],
            "gData_headService" => ['required', 'string', 'max:255'],
            "gData_headCode" => ['required', 'string', 'max:255'],
            "gData_headDesignPressure" => ['required', 'regex:/^\d+(\.\d{1,5})?$/'],
            "gData_headDesignTemperature" => ['required', 'regex:/^\d+(\.\d{1,5})?$/'],
            "gData_headOuterDiameter" => ['required', 'string', 'max:255'],
            "gData_headMaterial" => ['required', 'string', 'max:255'],
            "gData_headAllowableStress" => ['required', 'string', 'max:255'],
            "gData_headEfficiency" => ['required', 'string', 'max:255'],
            "gData_headCorrosionAllowance" => ['required', 'regex:/^\d+(\.\d{1,5})?$/'],
            "gData_headMinimumThickness" => ['required', 'regex:/^\d+(\.\d{1,5})?$/'],
            "gData_headCorrosionRate" => ['required', 'regex:/^\d+(\.\d{1,5})?$/'],
        ];
    }

    public function messages()
    {
        return [
            'gData_designPressure.regex' => 'Design Pressure must be a float type',
            'gData_designTemperature.regex' => 'Design Temperature must be a float type',
            'gData_operatingPressure.regex' => 'Operating Pressure must be a float type',
            'gData_operatingTemperature.regex' => 'Operating Temperature must be a float type',
            'gData_corrosionAllowance.regex' => 'Corrosion Allowance must be a float type',
            'gData_shellDesignPressure.regex' => 'Shell Design Pressure must be a float type',
            'gData_shellDesignTemperature.regex' => 'Shell Design Temperature must be a float type',
            'gData_shellMinimumThickness.regex' => 'Shell Minimum Thickness must be a float type',
            'gData_shellCorrosionRate.regex' => 'Shell Corrosion Rate must be a float type',
            'gData_headDesignPressure.regex' => 'Head Design Pressure must be a float type',
            'gData_headDesignTemperature.regex' => 'Head Design Temperature must be a float type',
            'gData_headCorrosionAllowance.regex' => 'Head Corrosion Allowance must be a float type',
            'gData_headMinimumThickness.regex' => 'Head Minimum Thickness must be a float type',
            'gData_headCorrosionRate.regex' => 'Head Corrosion Rate must be a float type',
        ];
    }
}
