<?php

namespace App\Http\Requests\RBIValue;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRBIValueRequest extends FormRequest
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
            "rbiValue_gffTotal" => ["required"],
            "rbiValue_shellThinning" => ["required"],
            "rbiValue_headThinning" => ["required"],
            "rbiValue_shellExternal" => ["required"],
            "rbiValue_headExternal" => ["required"],
            "rbiValue_shellTotal" => ["required"],
            "rbiValue_headTotal" => ["required"],
            "rbiValue_shellSection" => ["required"],
            "rbiValue_headSection" => ["required"],
        ];
    }
}
