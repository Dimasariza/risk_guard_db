<?php

namespace App\Http\Requests\CorrosionLoop;

use Illuminate\Foundation\Http\FormRequest;

class CreateCorrosionLoopRequest extends FormRequest
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
            'cl_name' => ['string', 'max:255'],
            'cl_fileId' => ['string', 'max:255'],
            'cl_userId' => ['string', 'max:255'],
        ];
    }
}
