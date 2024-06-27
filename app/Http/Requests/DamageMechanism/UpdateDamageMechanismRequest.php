<?php

namespace App\Http\Requests\DamageMechanism;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDamageMechanismRequest extends FormRequest
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
            "dm_thinning" => ["nullable", "boolean"],
            "dm_comp_linning" => ["nullable", "boolean"],
            "dm_scc_caustic" => ["nullable", "boolean"],
            "dm_scc_amine" => ["nullable", "boolean"],
            "dm_scc_sulfide" => ["nullable", "boolean"],
            "dm_scc_hic_h2s" => ["nullable", "boolean"],
            "dm_scc_alkaline" => ["nullable", "boolean"],
            "dm_scc_polythionic" => ["nullable", "boolean"],
            // "dm_scc_chloride" => ["nullable", "boolean"],
            "dm_scc_chloride_A" => ["nullable", "boolean"],
            "dm_scc_chloride_B" => ["nullable", "boolean"],
            "dm_scc_chloride_C" => ["nullable", "boolean"],
            "dm_scc_hydrogen" => ["nullable", "boolean"],
            "dm_scc_hic_hf" => ["nullable", "boolean"],
            // "dm_exCor" => ["nullable", "boolean"],
            "dm_exCor_A" => ["nullable", "boolean"],
            "dm_exCor_B" => ["nullable", "boolean"],
            "dm_exCor_C" => ["nullable", "boolean"],
            "dm_exCor_D" => ["nullable", "boolean"],
            "dm_exCor_E" => ["nullable", "boolean"],
            "dm_exCor_F" => ["nullable", "boolean"],
            "dm_exCor_G" => ["nullable", "boolean"],
            "dm_exCor_H" => ["nullable", "boolean"],
            "dm_exCor_I" => ["nullable", "boolean"],
            "dm_cor_under_ins" => ["nullable", "boolean"],
            // "dm_exChloride" => ["nullable", "boolean"],
            "dm_exChloride_A" => ["nullable", "boolean"],
            "dm_exChloride_B" => ["nullable", "boolean"],
            "dm_exChloride_C" => ["nullable", "boolean"],
            "dm_exChloride_D" => ["nullable", "boolean"],
            // "dm_highTemp" => ["nullable", "boolean"],
            "dm_highTemp_A" => ["nullable", "boolean"],
            "dm_highTemp_B" => ["nullable", "boolean"],
            "dm_highTemp_C" => ["nullable", "boolean"],
            // "dm_brittleFracture" => ["nullable", "boolean"],
            "dm_brittleFracture_A" => ["nullable", "boolean"],
            "dm_brittleFracture_B" => ["nullable", "boolean"],
            // "dm_low_alloy_steel" => ["nullable", "boolean"],
            "dm_low_alloy_steel_A" => ["nullable", "boolean"],
            "dm_low_alloy_steel_B" => ["nullable", "boolean"],
            // "dm_embrittlement" => ["nullable", "boolean"],
            "dm_embrittlement_A" => ["nullable", "boolean"],
            "dm_embrittlement_B" => ["nullable", "boolean"],
            // "dm_sigma_phase" => ["nullable", "boolean"],
            "dm_sigma_phase_A" => ["nullable", "boolean"],
            "dm_sigma_phase_B" => ["nullable", "boolean"],
            // "dm_piping_mechanical" => ["nullable", "boolean"],
            "dm_piping_mechanical_A" => ["nullable", "boolean"],
            "dm_piping_mechanical_B" => ["nullable", "boolean"],
        ];
    }
}
