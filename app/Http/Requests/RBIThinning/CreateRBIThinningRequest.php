<?php

namespace App\Http\Requests\RBIThinning;

use Illuminate\Foundation\Http\FormRequest;

class CreateRBIThinningRequest extends FormRequest
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
            "rbiThinning_thickness" => ["required", "regex:/^\d+(\.\d{1,9})?$/"],
            "rbiThinning_corrosionAllowance" => ["required", "regex:/^\d+(\.\d{1,9})?$/"],
            "rbiThinning_designTemperature" => ["required", "regex:/^\d+(\.\d{1,9})?$/"],
            "rbiThinning_designPressure" => ["required", "integer"],
            "rbiThinning_operatingTemperature" => ["required", "regex:/^\d+(\.\d{1,9})?$/"],
            "rbiThinning_operatingPressure" => ["required", "integer"],
            "rbiThinning_designCode" => ["required", "string"],
            "rbiThinning_equipmentType" => ["required", "string"],
            "rbiThinning_componentType" => ["required", "string"],
            "rbiThinning_geometryData" => ["required", "string"],
            "rbiThinning_materialSpecification" => ["required", "string"],
            "rbiThinning_yieldStrength" => ["required", "regex:/^\d+(\.\d{1,9})?$/"],
            "rbiThinning_tensileStrength" => ["required", "regex:/^\d+(\.\d{1,9})?$/"],
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
            'rbiThinning_thickness.regex' => 'Thickness must be a float type',
            'rbiThinning_corrosionAllowance.regex' => 'Corrosion Allowance must be a float type',
            'rbiThinning_designTemperature.regex' => 'Design Temperature must be a float type',
            'rbiThinning_operatingTemperature.regex' => 'Operating Temperature must be a float type',
            'rbiThinning_yieldStrength.regex' => 'Yield Strength must be a float type',
            'rbiThinning_tensileStrength.regex' => 'Tensile Strength must be a float type',
        ];
    }
}
