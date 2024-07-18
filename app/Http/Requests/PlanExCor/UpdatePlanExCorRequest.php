<?php

namespace App\Http\Requests\PlanExCor;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePlanExCorRequest extends FormRequest
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
            "planExCor_equationDesign" => ["nullable", "regex:/^-?\d+(\.\d{1,10})?$/"],
            "planExCor_interface" => ["nullable", "regex:/^-?\d+(\.\d{1,10})?$/"],
            "planExCor_tMinMM" => ["nullable", "regex:/^-?\d+(\.\d{1,10})?$/"],
            "planExCor_tMinInch" => ["nullable", "regex:/^-?\d+(\.\d{1,10})?$/"],
        ];
    }

    public function messages()
    {
        return [
        ];
    }
}
