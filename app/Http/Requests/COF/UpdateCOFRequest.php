<?php

namespace App\Http\Requests\COF;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCOFRequest extends FormRequest
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
            "cof_massComponent" => [],
            "cof_massInventory" => [],
            "cof_representativeFluid" => [],
            "cof_phaseOfFluid" => [],
            "cof_releaseHoleSizeD1" => [],
            "cof_releaseHoleSizeD2" => [],
            "cof_releaseHoleSizeD3" => [],
            "cof_releaseHoleSizeD4" => [],
            "cof_liquidInventories" => [],
            "cof_detectionSystem" => [],
            "cof_isolationSystem" => [],
            "cof_flamableCons" => [],
            "cof_damageCons" => [],
            "cof_adjToFlamable" => [],
            "cof_C1mfracTox" => [],
            "cof_ps" => [],
        ];
    }
}
