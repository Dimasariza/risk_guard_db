<?php

namespace App\Http\Requests\PlanThinning;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePlanThinningRequest extends FormRequest
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
            "rbiThinnings_startDate" => ["required", "string", "max:255"],
            "rbiThinnings_thickness" => ["required", "string", "max:255"],
            "rbiThinnings_corrosionAllowance" => ["required", "string", "max:255"],
            "rbiThinnings_designTemperature" => ["required", "string", "max:255"],
            "rbiThinnings_designPressure" => ["required", "string", "max:255"],
            "rbiThinnings_operatingTemperature" => ["required", "string", "max:255"],
            "rbiThinnings_operatingPressure" => ["required", "string", "max:255"],
            "rbiThinnings_designCode" => ["required", "string", "max:255"],
            "rbiThinnings_equipmentType" => ["required", "string", "max:255"],
            "rbiThinnings_componentType" => ["required", "string", "max:255"],
            "rbiThinnings_geometryData" => ["required", "string", "max:255"],
            "rbiThinnings_materialSpecification" => ["required", "string", "max:255"],
            "rbiThinnings_yieldStrength" => ["required", "string", "max:255"],
            "rbiThinnings_tensileStrength" => ["required", "string", "max:255"],
            "rbiThinnings_weldJointEfficiency" => ["required", "string", "max:255"],
            "rbiThinnings_heatTracing" => ["required", "string", "max:255"],
        ];
    }


    public function messages()
    {
        return [];
    }
}
