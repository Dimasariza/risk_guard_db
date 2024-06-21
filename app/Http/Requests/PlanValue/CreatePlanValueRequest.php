<?php

namespace App\Http\Requests\PlanValue;

use Illuminate\Foundation\Http\FormRequest;

class CreatePlanValueRequest extends FormRequest
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
            "planValue_gffTotal" => ["required"],
            "planValue_shellThinning" => ["required"],
            "planValue_headThinning" => ["required"],
            "planValue_shellExternal" => ["required"],
            "planValue_headExternal" => ["required"],
            "planValue_shellTotal" => ["required"],
            "planValue_headTotal" => ["required"],
            "planValue_shellSection" => ["required"],
            "planValue_headSection" => ["required"],
        ];
    }
}
