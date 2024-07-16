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
            "planThinning_corrosionRate" => ["regex:/^\d+(\.\d{1,9})?$/"],
            "planThinning_planDate" => ["date"],
            "planThinning_tMinInch" => ["regex:/^\d+(\.\d{1,9})?$/"],
            "planThinning_tMinMM" => ["regex:/^\d+(\.\d{1,9})?$/"],
            "planThinning_nInspA" => ["regex:/^\d+(\.\d{1,9})?$/"],
            "planThinning_nInspB" => ["regex:/^\d+(\.\d{1,9})?$/"],
            "planThinning_nInspC" => ["regex:/^\d+(\.\d{1,9})?$/"],
            "planThinning_nInspD" => ["regex:/^\d+(\.\d{1,9})?$/"],
            "planThinning_injectionPoints" => ["regex:/^\d+(\.\d{1,9})?$/"],
            "planThinning_deadLegs" => ["regex:/^\d+(\.\d{1,9})?$/"],
            "planThinning_weldingConstruction" => ["regex:/^\d+(\.\d{1,9})?$/"],
            "planThinning_astMaintenance" => ["regex:/^\d+(\.\d{1,9})?$/"],
            "planThinning_settlement" => ["regex:/^\d+(\.\d{1,9})?$/"],
            "planThinning_onlineMonitoring" => ["regex:/^\d+(\.\d{1,9})?$/"],
        ];
    }


    public function messages()
    {
        return [];
    }
}
