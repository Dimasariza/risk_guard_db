<?php

namespace App\Http\Requests\PlanValue;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePlanValueRequest extends FormRequest
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
            "planValue_FMS" => ["required"],
            "planValue_failureFrequency" => ["required"],
        ];
    }
}
