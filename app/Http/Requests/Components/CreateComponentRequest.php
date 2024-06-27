<?php

namespace App\Http\Requests\Components;

use Illuminate\Foundation\Http\FormRequest;

class CreateComponentRequest extends FormRequest
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
            'comp_tagOfComponent' => ['required', 'string', 'max:255'],
            'comp_nameOfComponent' => ['required', 'string', 'max:255'],
            'comp_componentType' => ['required', 'string', 'max:255'],
            'comp_equipmentId' => ['nullable', 'string', 'max:255'],
            'comp_userId' => ['required', 'string', 'max:255'],
        ];
    }
}
