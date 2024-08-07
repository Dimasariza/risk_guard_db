<?php

namespace App\Http\Requests\Equipments;

use Illuminate\Foundation\Http\FormRequest;

class CreateEquipmentRequest extends FormRequest
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
            'eq_tagOfEquipment' => ['required', 'string', 'max:255'],
            'eq_nameOfEquipment' => ['required', 'string', 'max:255'],
            'eq_equipmentType' => ['nullable', 'string', 'max:255'],
            'eq_itemId' => ['required', 'string', 'max:255'],
            'eq_userId' => ['required', 'string', 'max:255'],
        ];
    }
}
