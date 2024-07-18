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
            "planAlkaline_ph" => ["nullable", 'regex:/^-?\d+(\.\d{1,10})?$/'],
            "planAlkaline_inspection" => ["nullable", 'string'],
            "planAlkaline_numOfInspection" => ["nullable", 'regex:/^-?\d+(\.\d{1,10})?$/'],
            "planAlkaline_co3Consentration" => ["nullable", 'regex:/^-?\d+(\.\d{1,10})?$/'],
            "planAlkaline_dfacscc" => ["nullable", 'regex:/^-?\d+(\.\d{1,10})?$/'],
            "planAlkaline_shellPwht" => ["nullable", "boolean"],
            "planAlkaline_headPwht" => ["nullable", "boolean"],
        ];
    }

    public function messages()
    {
        return [
        ];
    }
}
