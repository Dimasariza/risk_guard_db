<?php

namespace App\Http\Requests\RBIThinning;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRBIThinningRequest extends FormRequest
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
            "rbiThinning_corrosionRate" => ["regex:/^\d+(\.\d{1,9})?$/"],
            "rbiThinning_rbiDate" => ["date"],
            "rbiThinning_tMinInch" => ["regex:/^\d+(\.\d{1,9})?$/"],
            "rbiThinning_tMinMM" => ["regex:/^\d+(\.\d{1,9})?$/"],
            "rbiThinning_nInspA" => ["regex:/^\d+(\.\d{1,9})?$/"],
            "rbiThinning_nInspB" => ["regex:/^\d+(\.\d{1,9})?$/"],
            "rbiThinning_nInspC" => ["regex:/^\d+(\.\d{1,9})?$/"],
            "rbiThinning_nInspD" => ["regex:/^\d+(\.\d{1,9})?$/"],
            "rbiThinning_injectionPoints" => ["regex:/^\d+(\.\d{1,9})?$/"],
            "rbiThinning_deadLegs" => ["regex:/^\d+(\.\d{1,9})?$/"],
            "rbiThinning_weldingConstruction" => ["regex:/^\d+(\.\d{1,9})?$/"],
            "rbiThinning_astMaintenance" => ["regex:/^\d+(\.\d{1,9})?$/"],
            "rbiThinning_settlement" => ["regex:/^\d+(\.\d{1,9})?$/"],
            "rbiThinning_onlineMonitoring" => ["regex:/^\d+(\.\d{1,9})?$/"],
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function messages()
    {
        return [
            'rbiThinning_thickness.regex' => 'Thickness must be a float type',
            'rbiThinning_corrosionAllowance.regex' => 'Corrosion Allowance must be a float type',
            'rbiThinning_designTemperature.regex' => 'Design Temperature must be a float type',
            'rbiThinning_operatingTemperature.regex' => 'Operating Temperature must be a float type',
            'rbiThinning_yieldStrength.regex' => 'Yield Strength must be a float type',
            'rbiThinning_tensileStrength.regex' => 'Tensile Strength must be a float type',
        ];
    }
}
