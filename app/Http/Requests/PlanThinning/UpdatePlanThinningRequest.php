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
            "planThinning_corrosionRate" => ["nullable", "regex:/^-?\d+(\.\d{1,10})?$/"],
            "planThinning_planDate" => ["nullable", "date"],
            "planThinning_tMinInch" => ["nullable", "regex:/^-?\d+(\.\d{1,10})?$/"],
            "planThinning_tMinMM" => ["nullable", "regex:/^-?\d+(\.\d{1,10})?$/"],
            "planThinning_nInspA" => ["nullable", "regex:/^-?\d+(\.\d{1,10})?$/"],
            "planThinning_nInspB" => ["nullable", "regex:/^-?\d+(\.\d{1,10})?$/"],
            "planThinning_nInspC" => ["nullable", "regex:/^-?\d+(\.\d{1,10})?$/"],
            "planThinning_nInspD" => ["nullable", "regex:/^-?\d+(\.\d{1,10})?$/"],
            "planThinning_injectionPoints" => ["nullable", "regex:/^-?\d+(\.\d{1,10})?$/"],
            "planThinning_deadLegs" => ["nullable", "regex:/^-?\d+(\.\d{1,10})?$/"],
            "planThinning_weldingConstruction" => ["nullable", "regex:/^-?\d+(\.\d{1,10})?$/"],
            "planThinning_astMaintenance" => ["nullable", "regex:/^-?\d+(\.\d{1,10})?$/"],
            "planThinning_settlement" => ["nullable", "regex:/^-?\d+(\.\d{1,10})?$/"],
            "planThinning_onlineMonitoring" => ["nullable", "regex:/^-?\d+(\.\d{1,10})?$/"],
        ];
    }


    public function messages()
    {
        return [];
    }
}
