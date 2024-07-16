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
            "planAlkaline_ph" => [],
            "planAlkaline_inspection" => [],
            "planAlkaline_numOfInspection" => [],
            "planAlkaline_co3Consentration" => [],
            "planAlkaline_dfacscc" => [],
            "planAlkaline_shellPwht" => [],
            "planAlkaline_headPwht" => [],
        ];
    }

    public function messages()
    {
        return [
        ];
    }
}
