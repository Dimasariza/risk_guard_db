<?php

namespace App\Http\Requests\RBIAlkaline;

use Illuminate\Foundation\Http\FormRequest;

class CreateRBIAlkalineRequest extends FormRequest
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
            "rbiAlkaline_componentId" => ["required", "string", "max:255"],
            // "rbiAlkaline_shellSusceptibility" => ["required"],
            // "rbiAlkaline_headSusceptibility" => ["required"],
            // "rbiAlkaline_shellSeverityId" => ["required"],
            // "rbiAlkaline_headSeverityId" => ["required"],
            // "rbiAlkaline_ageTimeInService" => ["required"],
            // "rbiAlkaline_sheelSection" => ["required"],
            // "rbiAlkaline_headSection" => ["required"],
        ];
    }
}
