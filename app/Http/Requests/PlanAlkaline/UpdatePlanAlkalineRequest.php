<?php

namespace App\Http\Requests\PlanAlkaline;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePlanAlkalineRequest extends FormRequest
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
            "planAlkaline_shellSusceptibility" => ["required", "boolean"],
            "planAlkaline_headSusceptibility" => ["required", "boolean"],
            "planAlkaline_shellSeverityId" => ["required", "integer"],
            "planAlkaline_headSeverityId" => ["required", "integer"],
            "planAlkaline_ageTimeInService" => ["required", "regex:/^\d+(\.\d{1,9})?$/"],
            "planAlkaline_sheelSection" => ["required", "integer"],
            "planAlkaline_headSection" => ["required", "integer"],
        ];
    }

    public function messages()
    {
        return [
            "planAlkaline_shellSusceptibility" => "Type must be correct",
            "planAlkaline_headSusceptibility" => "Type must be correct",
            "planAlkaline_shellSeverityId" => "Type must be correct",
            "planAlkaline_headSeverityId" => "Type must be correct",
            "planAlkaline_ageTimeInService.regex" => "Type must be correct",
            "planAlkaline_sheelSection" => "Type must be correct",
            "planAlkaline_headSection" => "Type must be correct",
        ];
    }
}
