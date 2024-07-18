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
            "rbiThinning_corrosionRate" => ["nullable", "regex:/^-?\d+(\.\d{1,10})?$/"],
            "rbiThinning_rbiDate" => ["nullable", "date"],
            "rbiThinning_tMinInch" => ["nullable", "regex:/^-?\d+(\.\d{1,10})?$/"],
            "rbiThinning_tMinMM" => ["nullable", "regex:/^-?\d+(\.\d{1,10})?$/"],
            "rbiThinning_nInspA" => ["nullable", "regex:/^-?\d+(\.\d{1,10})?$/"],
            "rbiThinning_nInspB" => ["nullable", "regex:/^-?\d+(\.\d{1,10})?$/"],
            "rbiThinning_nInspC" => ["nullable", "regex:/^-?\d+(\.\d{1,10})?$/"],
            "rbiThinning_nInspD" => ["nullable", "regex:/^-?\d+(\.\d{1,10})?$/"],
            "rbiThinning_injectionPoints" => ["nullable", "regex:/^-?\d+(\.\d{1,10})?$/"],
            "rbiThinning_deadLegs" => ["nullable", "regex:/^-?\d+(\.\d{1,10})?$/"],
            "rbiThinning_weldingConstruction" => ["nullable", "regex:/^-?\d+(\.\d{1,10})?$/"],
            "rbiThinning_astMaintenance" => ["nullable", "regex:/^-?\d+(\.\d{1,10})?$/"],
            "rbiThinning_settlement" => ["nullable", "regex:/^-?\d+(\.\d{1,10})?$/"],
            "rbiThinning_onlineMonitoring" => ["nullable", "regex:/^-?\d+(\.\d{1,10})?$/"],
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
