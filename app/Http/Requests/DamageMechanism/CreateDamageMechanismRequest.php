<?php

namespace App\Http\Requests\DamageMechanism;

use Illuminate\Foundation\Http\FormRequest;

class CreateDamageMechanismRequest extends FormRequest
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
            "dm_componentId" => ["required", "string"],
            // "dm_thinning" => ["required", "boolean"],
            // "dm_comp_linning" => ["required", "boolean"],
            // "dm_scc_caustic" => ["required", "boolean"],
            // "dm_scc_amine" => ["required", "boolean"],
            // "dm_scc_sulfide" => ["required", "boolean"],
            // "dm_scc_hic_h2s" => ["required", "boolean"],
            // "dm_scc_alkaline" => ["required", "boolean"],
            // "dm_scc_polythionic" => ["required", "boolean"],
            // "dm_scc_chloride" => ["required", "boolean"],
            // "dm_scc_chloride_A" => ["required", "boolean"],
            // "dm_scc_chloride_B" => ["required", "boolean"],
            // "dm_scc_chloride_C" => ["required", "boolean"],
            // "dm_scc_hydrogen" => ["required", "boolean"],
            // "dm_scc_hic_hf" => ["required", "boolean"],
            // "dm_exCor" => ["required", "boolean"],
            // "dm_exCor_A" => ["required", "boolean"],
            // "dm_exCor_B" => ["required", "boolean"],
            // "dm_exCor_C" => ["required", "boolean"],
            // "dm_exCor_D" => ["required", "boolean"],
            // "dm_exCor_E" => ["required", "boolean"],
            // "dm_exCor_F" => ["required", "boolean"],
            // "dm_exCor_G" => ["required", "boolean"],
            // "dm_exCor_H" => ["required", "boolean"],
            // "dm_exCor_I" => ["required", "boolean"],
            // "dm_cor_under_ins" => ["required", "boolean"],
            // "dm_exChloride" => ["required", "boolean"],
            // "dm_exChloride_A" => ["required", "boolean"],
            // "dm_exChloride_B" => ["required", "boolean"],
            // "dm_exChloride_C" => ["required", "boolean"],
            // "dm_exChloride_D" => ["required", "boolean"],
            // "dm_highTemp" => ["required", "boolean"],
            // "dm_highTemp_A" => ["required", "boolean"],
            // "dm_highTemp_B" => ["required", "boolean"],
            // "dm_highTemp_C" => ["required", "boolean"],
            // "dm_brittleFracture" => ["required", "boolean"],
            // "dm_brittleFracture_A" => ["required", "boolean"],
            // "dm_brittleFracture_B" => ["required", "boolean"],
            // "dm_low_alloy_steel" => ["required", "boolean"],
            // "dm_low_alloy_steel_A" => ["required", "boolean"],
            // "dm_low_alloy_steel_B" => ["required", "boolean"],
            // "dm_embrittlement" => ["required", "boolean"],
            // "dm_embrittlement_A" => ["required", "boolean"],
            // "dm_embrittlement_B" => ["required", "boolean"],
            // "dm_sigma_phase" => ["required", "boolean"],
            // "dm_sigma_phase_A" => ["required", "boolean"],
            // "dm_sigma_phase_B" => ["required", "boolean"],
            // "dm_piping_mechanical" => ["required", "boolean"],
            // "dm_piping_mechanical_A" => ["required", "boolean"],
            // "dm_piping_mechanical_B" => ["required", "boolean"],
        ];
    }
}
