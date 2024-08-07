<?php

namespace App\Http\Requests\POLRBI;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePOLRBIRequest extends FormRequest
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
            "rbi_fluidService" => ["nullable"],
            "rbi_typicalTempF" => ["nullable"],
            "rbi_designType" => ["nullable"],
            "rbi_discharge" => ["nullable"],
            "rbi_adjusmentFactor" => ["nullable"],
            "rbi_serviceSeverity" => ["nullable"],
            "rbi_envAdjusmentFactor" => ["nullable"],
            "rbi_inspEffectiveness" => ["nullable"],
            "rbi_confidenceFactor" => ["nullable"],
            "rbi_eventFreqFire" => ["nullable"],
            "rbi_eventFreqOverFilling" => ["nullable"],
            "rbi_protectedEquipment" => ["nullable"],
            "rbi_dfValue" => ["nullable"],
            "rbi_failureFrequency" => ["nullable"],
            "rbi_damageFactor" => ["nullable"],
            "rbi_rbiDate" => ["nullable", "date"],
        ];
    }
}
