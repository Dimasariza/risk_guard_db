<?php

namespace App\Http\Requests\RBIThinning;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRBIThinningRequest extends FormRequest
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
            "rbiThinning_startDate" => ["required", "date"],
            "rbiThinning_thickness" => ["required", "regex:/^\d+(\.\d{1,5})?$/"],
            "rbiThinning_corrosionAllowance" => ["required", "regex:/^\d+(\.\d{1,5})?$/"],
            "rbiThinning_designTemperature" => ["required", "regex:/^\d+(\.\d{1,5})?$/"],
            "rbiThinning_designPressure" => ["required", "integer"],
            "rbiThinning_operatingTemperature" => ["required", "regex:/^\d+(\.\d{1,5})?$/"],
            "rbiThinning_operatingPressure" => ["required", "integer"],
            "rbiThinning_designCode" => ["required", "string"],
            "rbiThinning_equipmentType" => ["required", "string"],
            "rbiThinning_componentType" => ["required", "string"],
            "rbiThinning_geometryData" => ["required", "string"],
            "rbiThinning_materialSpecification" => ["required", "string"],
            "rbiThinning_yieldStrength" => ["required", "regex:/^\d+(\.\d{1,5})?$/"],
            "rbiThinning_tensileStrength" => ["required", "regex:/^\d+(\.\d{1,5})?$/"],
            "rbiThinning_weldJointEfficiency" => ["required", "integer"],
            "rbiThinning_heatTracing" => ["required", "boolean"],
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
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
