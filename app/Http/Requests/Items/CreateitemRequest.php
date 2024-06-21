<?php

namespace App\Http\Requests\GeneralData;

use Illuminate\Foundation\Http\FormRequest;

class CreateGeneralDataRequest extends FormRequest
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
            'item_tagOfItem' => ['required', 'string', 'max:255'],
            'item_nameOfItem' => ['required', 'string', 'max:255'],
        ];
    }
}
