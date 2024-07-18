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
            "cof_componentId" => ["required", "string", "max:255"],
            "cof_massComponent" => ["nullable"],
            "cof_massInventory" => ["nullable"],
            "cof_representativeFluid" => ["nullable"],
            "cof_phaseOfFluid" => ["nullable"],
            "cof_releaseHoleSizeD1" => ["nullable"],
            "cof_releaseHoleSizeD2" => ["nullable"],
            "cof_releaseHoleSizeD3" => ["nullable"],
            "cof_releaseHoleSizeD4" => ["nullable"],
            "cof_liquidInventories" => ["nullable"],
            "cof_detectionSystem" => ["nullable"],
            "cof_isolationSystem" => ["nullable"],
            "cof_flamableCons" => ["nullable"],
            "cof_damageCons" => ["nullable"],
            "cof_adjToFlamable" => ["nullable"],
        ];
    }
}
