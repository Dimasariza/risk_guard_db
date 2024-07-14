<?php

namespace App\Http\Requests\COF;

use Illuminate\Foundation\Http\FormRequest;

class CreateCOFRequest extends FormRequest
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
            "rbiExCor_componentId" => ["required", "string", "max:255"],
        ];
    }
}
