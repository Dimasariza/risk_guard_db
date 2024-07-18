<?php

namespace App\Http\Requests\RBIAlkaline;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRBIAlkalineRequest extends FormRequest
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
            "rbiAlkaline_ph" => ["nullable", 'regex:/^-?\d+(\.\d{1,10})?$/'],
            "rbiAlkaline_inspection" => ["nullable", 'string'],
            "rbiAlkaline_numOfInspection" => ["nullable", 'regex:/^-?\d+(\.\d{1,10})?$/'],
            "rbiAlkaline_co3Consentration" => ["nullable", 'regex:/^-?\d+(\.\d{1,10})?$/'],
            "rbiAlkaline_dfacscc" => ["nullable", 'regex:/^-?\d+(\.\d{1,10})?$/'],
            "rbiAlkaline_shellPwht" => ["nullable", "boolean"],
            "rbiAlkaline_headPwht" => ["nullable", "boolean"],
        ];
    }
}
