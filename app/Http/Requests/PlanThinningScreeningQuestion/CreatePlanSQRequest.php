<?php

namespace App\Http\Requests\PlanThinningScreeningQuestion;

use Illuminate\Foundation\Http\FormRequest;

class CreatePlanThinningSQRequest extends FormRequest
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
            "planThinning_componentId" => ["required", "string", "max:255"],
            // "planThinning_startDate" => ["required", "date"],
            // "planThinning_thickness" => ["required", "regex:/^-?\d+(\.\d{1,10})?$/"],
            // "planThinning_corrosionAllowance" => ["required", "regex:/^-?\d+(\.\d{1,10})?$/"],
            // "planThinning_designTemperature" => ["required", "regex:/^-?\d+(\.\d{1,10})?$/"],
            // "planThinning_designPressure" => ["required", "integer"],
            // "planThinning_operatingTemperature" => ["required", "regex:/^-?\d+(\.\d{1,10})?$/"],
            // "planThinning_operatingPressure" => ["required", "integer"],
            // "planThinning_designCode" => ["required", "string"],
            // "planThinning_equipmentType" => ["required", "string"],
            // "planThinning_componentType" => ["required", "string"],
            // "planThinning_geometryData" => ["required", "string"],
            // "planThinning_materialSpecification" => ["required", "string"],
            // "planThinning_yieldStrength" => ["required", "regex:/^-?\d+(\.\d{1,10})?$/"],
            // "planThinning_tensileStrength" => ["required", "regex:/^-?\d+(\.\d{1,10})?$/"],
            // "planThinning_weldJointEfficiency" => ["required", "integer"],
            // "planThinning_heatTracing" => ["required", "boolean"],
        ];
    }

    public function messages()
    {
        return [];
    }
}
