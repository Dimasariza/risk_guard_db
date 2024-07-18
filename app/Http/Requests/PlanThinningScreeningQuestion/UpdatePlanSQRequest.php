<?php

namespace App\Http\Requests\PlanThinning;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePlanThinningSQRequest extends FormRequest
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
            "planThinning_startDate" => ["nullable", "date"],
            "planThinning_thickness" => ["nullable", "regex:/^-?\d+(\.\d{1,10})?$/"],
            "planThinning_corrosionAllowance" => ["nullable", "regex:/^-?\d+(\.\d{1,10})?$/"],
            "planThinning_designTemperature" => ["nullable", "regex:/^-?\d+(\.\d{1,10})?$/"],
            "planThinning_designPressure" => ["nullable", "integer"],
            "planThinning_operatingTemperature" => ["nullable", "regex:/^-?\d+(\.\d{1,10})?$/"],
            "planThinning_operatingPressure" => ["nullable", "integer"],
            "planThinning_designCode" => ["nullable", "string"],
            "planThinning_equipmentType" => ["nullable", "string"],
            "planThinning_componentType" => ["nullable", "string"],
            "planThinning_geometryData" => ["nullable", "string"],
            "planThinning_materialSpecification" => ["nullable", "string"],
            "planThinning_yieldStrength" => ["nullable", "regex:/^-?\d+(\.\d{1,10})?$/"],
            "planThinning_tensileStrength" => ["nullable", "regex:/^-?\d+(\.\d{1,10})?$/"],
            "planThinning_weldJointEfficiency" => ["nullable", "integer"],
            "planThinning_heatTracing" => ["nullable", "boolean"],
        ];
    }


    public function messages()
    {
        return [];
    }
}
