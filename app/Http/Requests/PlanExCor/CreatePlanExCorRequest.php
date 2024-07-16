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
            "planExCor_componentId" => ["required", "string", "max:255"],
        ];
    }

    public function messages()
    {
        return [
        ];
    }
}
