<?php

namespace App\Http\Requests\RBIThinningScreeningQuestion;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRBISQRequest extends FormRequest
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
            "rbiSQ_HCLContain" => [],
            "rbiSQ_HCLIsFreeWater" => [],
            "rbiSQ_HCLphUnder7" => [],
            "rbiSQ_SulfidicContainOil" => [],
            "rbiSQ_SulfidicTempOver204" => [],
            "rbiSQ_SulfuricContainH2SO4" => [],
            "rbiSQ_H2SH2containH2s" => [],
            "rbiSQ_H2SH2TempOver204" => [],
            "rbiSQ_HydrifluoricContainHF" => [],
            "rbiSQ_SourWaterIsFreeH2S" => [],
            "rbiSQ_AmineIsEquipment" => [],
            "rbiSQ_OxidationTempOver482" => [],
            "rbiSQ_OxidationOxigenPresent" => [],
            "rbiSQ_AcidphUnder7" => [],
            "rbiSQ_AcidContainPPM" => [],
            "rbiSQ_CoolingIsEquipment" => [],
            "rbiSQ_SoilSideIsEquipment" => [],
            "rbiSQ_SoilSideIsMaterial" => [],
            "rbiSQ_CO2IsFreeWater" => [],
            "rbiSQ_CO2IsMaterial" => [],
            "rbiSQ_ASTIsEquipment" => [],
            "rbiSQ_notesHCLphUnder7" => [],
            "rbiSQ_notessulfidicTempOver204" => [],
            "rbiSQ_notesH2SH2" => [],
            "rbiSQ_notesOxidatoin" => [],
            "rbiSQ_notesAcid" => [],
            "rbiSQ_notesCO2" => [],
        ];
    }


    public function messages()
    {
        return [];
    }
}
