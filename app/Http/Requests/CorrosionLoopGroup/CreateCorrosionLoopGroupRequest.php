<?php

namespace App\Http\Requests\CorrosionLoopGroup;

use Illuminate\Foundation\Http\FormRequest;

class CreateCorrosionLoopGroupRequest extends FormRequest
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
            'clGroup_name' => ['string', 'max:255'],
            'clGroup_clId' => ['string', 'max:255'],
            'clGroup_componentId' => ['string', 'max:255'],
            'clGroup_target' => ['nullable']
        ];
    }
}
