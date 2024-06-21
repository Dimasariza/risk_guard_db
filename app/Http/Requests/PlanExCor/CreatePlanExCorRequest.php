<?php

namespace App\Http\Requests\PlanExCor;

use Illuminate\Foundation\Http\FormRequest;

class CreatePlanExCorRequest extends FormRequest
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
            "planExCor_yearAssesment" => ["required", "date"],
            "planExCor_yearInstallation" => ["required", "date"],
            "planExCor_thicknessValue" => ["required", "regex:/^\d+(\.\d{1,9})?$/"],
            "planExCor_baseCorrosionRate" => ["required", "regex:/^\d+(\.\d{1,9})?$/"],
            "planExCor_finalCorrosionRate" => ["required", "regex:/^\d+(\.\d{1,9})?$/"],
            "planExCor_shellTimeInService" => ["required", "regex:/^\d+(\.\d{1,9})?$/"],
            "planExCor_headTimeInService" => ["required", "regex:/^\d+(\.\d{1,9})?$/"],
            "planExCor_ageCoat" => ["required", "regex:/^\d+(\.\d{1,9})?$/"],
            "planExCor_adjusmentCoat" => ["required", "regex:/^\d+(\.\d{1,9})?$/"],
            "planExCor_age" => ["required", "regex:/^\d+(\.\d{1,9})?$/"],
            "planExCor_minReqWallThickness" => ["required", "regex:/^\d+(\.\d{1,9})?$/"],
            "planExCor_shellDFParameter" => ["required", "regex:/^\d+(\.\d{1,9})?$/"],
            "planExCor_headDFParameter" => ["required", "regex:/^\d+(\.\d{1,9})?$/"],
            "planExCor_flowStress" => ["required", "regex:/^\d+(\.\d{1,9})?$/"],
            "planExCor_shellStrengthRatio" => ["required", "regex:/^\d+(\.\d{1,9})?$/"],
            "planExCor_headStrengthRatio" => ["required", "regex:/^\d+(\.\d{1,9})?$/"],
            "planExCor_numInspA" => ["required", "regex:/^\d+(\.\d{1,9})?$/"],
            "planExCor_numInspB" => ["required", "regex:/^\d+(\.\d{1,9})?$/"],
            "planExCor_numInspC" => ["required", "regex:/^\d+(\.\d{1,9})?$/"],
            "planExCor_numInspD" => ["required", "regex:/^\d+(\.\d{1,9})?$/"],
        ];
    }

    public function messages()
    {
        return [
            "planExCor_thicknessValue.regex" => "Thickness value musst be a float type",
            "planExCor_baseCorrosionRate.regex" => "Base Corrosion Rate musst be a float type",
            "planExCor_finalCorrosionRate.regex" => "Final Corrosion Rate musst be a float type",
            "planExCor_shellTimeInService.regex" => "Shell time in service musst be a float type",
            "planExCor_headTimeInService.regex" => "Head time in service musst be a float type",
            "planExCor_ageCoat.regex" => "Age Coat musst be a float type",
            "planExCor_adjusmentCoat.regex" => "Adjusment Coat musst be a float type",
            "planExCor_age.regex" => "Age musst be a float type",
            "planExCor_minReqWallThickness.regex" => "Minimal Required Wall Thickness musst be a float type",
            "planExCor_shellDFParameter.regex" => "Shell Damage Factor Parameter musst be a float type",
            "planExCor_headDFParameter.regex" => "Head Damage Factor Parameter musst be a float type",
            "planExCor_flowStress.regex" => "Flow Stress musst be a float type",
            "planExCor_shellStrengthRatio.regex" => "Shell Strength Ratio musst be a float type",
            "planExCor_headStrengthRatio.regex" => "Head Strengt Ratio musst be a float type",
            "planExCor_numInspA.regex" => "Number of Inspection A musst be a float type",
            "planExCor_numInspB.regex" => "Number of Inspection B musst be a float type",
            "planExCor_numInspC.regex" => "Number of Inspection C musst be a float type",
            "planExCor_numInspD.regex" => "Number of Inspection D musst be a float type",
        ];
    }
}
