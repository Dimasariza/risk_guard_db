<?php

namespace App\Http\Requests\POFPlan;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePOFPlanRequest extends FormRequest
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
            //
            "plan_fluidService" => ["nullable"],
            "plan_typicalTempF" => ["nullable"],
            "plan_designType" => ["nullable"],
            "plan_discharge" => ["nullable"],
            "plan_adjusmentFactor" => ["nullable"],
            "plan_serviceSeverity" => ["nullable"],
            "plan_envAdjusmentFactor" => ["nullable"],
            "plan_inspEffectiveness" => ["nullable"],
            "plan_confidenceFactor" => ["nullable"],
            "plan_eventFreq" => ["nullable"],
            "plan_protectedEquipment" => ["nullable"],
            "plan_rbiDate" => ["nullable", "date"],
        ];
    }
}
