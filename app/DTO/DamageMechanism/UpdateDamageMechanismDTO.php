<?php

namespace App\DTO\DamageMechanism;

use App\Http\Requests\DamageMechanism\UpdateDamageMechanismRequest;

class UpdateDamageMechanismDTO
{
    public function __construct(
        public readonly ?bool $dm_thinning,
        public readonly ?bool $dm_comp_linning,
        public readonly ?bool $dm_scc_caustic,
        public readonly ?bool $dm_scc_amine,
        public readonly ?bool $dm_scc_sulfide,
        public readonly ?bool $dm_scc_hic_h2s,
        public readonly ?bool $dm_scc_alkaline,
        public readonly ?bool $dm_scc_polythionic,
        public readonly ?bool $dm_scc_chloride,
        public readonly ?bool $dm_scc_chloride_A,
        public readonly ?bool $dm_scc_chloride_B,
        public readonly ?bool $dm_scc_chloride_C,
        public readonly ?bool $dm_scc_hydrogen,
        public readonly ?bool $dm_scc_hic_hf,
        public readonly ?bool $dm_exCor,
        public readonly ?bool $dm_exCor_A,
        public readonly ?bool $dm_exCor_B,
        public readonly ?bool $dm_exCor_C,
        public readonly ?bool $dm_exCor_D,
        public readonly ?bool $dm_exCor_E,
        public readonly ?bool $dm_exCor_F,
        public readonly ?bool $dm_exCor_G,
        public readonly ?bool $dm_exCor_H,
        public readonly ?bool $dm_exCor_I,
        public readonly ?bool $dm_cor_under_ins,
        public readonly ?bool $dm_exChloride,
        public readonly ?bool $dm_exChloride_A,
        public readonly ?bool $dm_exChloride_B,
        public readonly ?bool $dm_exChloride_C,
        public readonly ?bool $dm_exChloride_D,
        public readonly ?bool $dm_highTemp,
        public readonly ?bool $dm_highTemp_A,
        public readonly ?bool $dm_highTemp_B,
        public readonly ?bool $dm_highTemp_C,
        public readonly ?bool $dm_brittleFracture,
        public readonly ?bool $dm_brittleFracture_A,
        public readonly ?bool $dm_brittleFracture_B,
        public readonly ?bool $dm_low_alloy_steel,
        public readonly ?bool $dm_low_alloy_steel_A,
        public readonly ?bool $dm_low_alloy_steel_B,
        public readonly ?bool $dm_embrittlement,
        public readonly ?bool $dm_embrittlement_A,
        public readonly ?bool $dm_embrittlement_B,
        public readonly ?bool $dm_sigma_phase,
        public readonly ?bool $dm_sigma_phase_A,
        public readonly ?bool $dm_sigma_phase_B,
        public readonly ?bool $dm_piping_mechanical,
        public readonly ?bool $dm_piping_mechanical_A,
        public readonly ?bool $dm_piping_mechanical_B,
    ) {
    }

    public static function fromRequest(UpdateDamageMechanismRequest $request): self
    {
        return new self(
            dm_thinning: $request->validated("dm_thinning"),
            dm_comp_linning: $request->validated("dm_comp_linning"),
            dm_scc_caustic: $request->validated("dm_scc_caustic"),
            dm_scc_amine: $request->validated("dm_scc_amine"),
            dm_scc_sulfide: $request->validated("dm_scc_sulfide"),
            dm_scc_hic_h2s: $request->validated("dm_scc_hic_h2s"),
            dm_scc_alkaline: $request->validated("dm_scc_alkaline"),
            dm_scc_polythionic: $request->validated("dm_scc_polythionic"),
            dm_scc_chloride: $request->validated("dm_scc_chloride"),
            dm_scc_chloride_A: $request->validated("dm_scc_chloride_A"),
            dm_scc_chloride_B: $request->validated("dm_scc_chloride_B"),
            dm_scc_chloride_C: $request->validated("dm_scc_chloride_C"),
            dm_scc_hydrogen: $request->validated("dm_scc_hydrogen"),
            dm_scc_hic_hf: $request->validated("dm_scc_hic_hf"),
            dm_exCor: $request->validated("dm_exCor"),
            dm_exCor_A: $request->validated("dm_exCor_A"),
            dm_exCor_B: $request->validated("dm_exCor_B"),
            dm_exCor_C: $request->validated("dm_exCor_C"),
            dm_exCor_D: $request->validated("dm_exCor_D"),
            dm_exCor_E: $request->validated("dm_exCor_E"),
            dm_exCor_F: $request->validated("dm_exCor_F"),
            dm_exCor_G: $request->validated("dm_exCor_G"),
            dm_exCor_H: $request->validated("dm_exCor_H"),
            dm_exCor_I: $request->validated("dm_exCor_I"),
            dm_cor_under_ins: $request->validated("dm_cor_under_ins"),
            dm_exChloride: $request->validated("dm_exChloride"),
            dm_exChloride_A: $request->validated("dm_exChloride_A"),
            dm_exChloride_B: $request->validated("dm_exChloride_B"),
            dm_exChloride_C: $request->validated("dm_exChloride_C"),
            dm_exChloride_D: $request->validated("dm_exChloride_D"),
            dm_highTemp: $request->validated("dm_highTemp"),
            dm_highTemp_A: $request->validated("dm_highTemp_A"),
            dm_highTemp_B: $request->validated("dm_highTemp_B"),
            dm_highTemp_C: $request->validated("dm_highTemp_C"),
            dm_brittleFracture: $request->validated("dm_brittleFracture"),
            dm_brittleFracture_A: $request->validated("dm_brittleFracture_A"),
            dm_brittleFracture_B: $request->validated("dm_brittleFracture_B"),
            dm_low_alloy_steel: $request->validated("dm_low_alloy_steel"),
            dm_low_alloy_steel_A: $request->validated("dm_low_alloy_steel_A"),
            dm_low_alloy_steel_B: $request->validated("dm_low_alloy_steel_B"),
            dm_embrittlement: $request->validated("dm_embrittlement"),
            dm_embrittlement_A: $request->validated("dm_embrittlement_A"),
            dm_embrittlement_B: $request->validated("dm_embrittlement_B"),
            dm_sigma_phase: $request->validated("dm_sigma_phase"),
            dm_sigma_phase_A: $request->validated("dm_sigma_phase_A"),
            dm_sigma_phase_B: $request->validated("dm_sigma_phase_B"),
            dm_piping_mechanical: $request->validated("dm_piping_mechanical"),
            dm_piping_mechanical_A: $request->validated("dm_piping_mechanical_A"),
            dm_piping_mechanical_B: $request->validated("dm_piping_mechanical_B"),
        );
    }

    public function build(): array
    {
        $arr = [
            "dm_thinning" => $this->dm_thinning,
            "dm_comp_linning" => $this->dm_comp_linning,
            "dm_scc_caustic" => $this->dm_scc_caustic,
            "dm_scc_amine" => $this->dm_scc_amine,
            "dm_scc_sulfide" => $this->dm_scc_sulfide,
            "dm_scc_hic_h2s" => $this->dm_scc_hic_h2s,
            "dm_scc_alkaline" => $this->dm_scc_alkaline,
            "dm_scc_polythionic" => $this->dm_scc_polythionic,
            "dm_scc_chloride" => $this->dm_scc_chloride,
            "dm_scc_chloride_A" => $this->dm_scc_chloride_A,
            "dm_scc_chloride_B" => $this->dm_scc_chloride_B,
            "dm_scc_chloride_C" => $this->dm_scc_chloride_C,
            "dm_scc_hydrogen" => $this->dm_scc_hydrogen,
            "dm_scc_hic_hf" => $this->dm_scc_hic_hf,
            "dm_exCor" => $this->dm_exCor,
            "dm_exCor_A" => $this->dm_exCor_A,
            "dm_exCor_B" => $this->dm_exCor_B,
            "dm_exCor_C" => $this->dm_exCor_C,
            "dm_exCor_D" => $this->dm_exCor_D,
            "dm_exCor_E" => $this->dm_exCor_E,
            "dm_exCor_F" => $this->dm_exCor_F,
            "dm_exCor_G" => $this->dm_exCor_G,
            "dm_exCor_H" => $this->dm_exCor_H,
            "dm_exCor_I" => $this->dm_exCor_I,
            "dm_cor_under_ins" => $this->dm_cor_under_ins,
            "dm_exChloride" => $this->dm_exChloride,
            "dm_exChloride_A" => $this->dm_exChloride_A,
            "dm_exChloride_B" => $this->dm_exChloride_B,
            "dm_exChloride_C" => $this->dm_exChloride_C,
            "dm_exChloride_D" => $this->dm_exChloride_D,
            "dm_highTemp" => $this->dm_highTemp,
            "dm_highTemp_A" => $this->dm_highTemp_A,
            "dm_highTemp_B" => $this->dm_highTemp_B,
            "dm_highTemp_C" => $this->dm_highTemp_C,
            "dm_brittleFracture" => $this->dm_brittleFracture,
            "dm_brittleFracture_A" => $this->dm_brittleFracture_A,
            "dm_brittleFracture_B" => $this->dm_brittleFracture_B,
            "dm_low_alloy_steel" => $this->dm_low_alloy_steel,
            "dm_low_alloy_steel_A" => $this->dm_low_alloy_steel_A,
            "dm_low_alloy_steel_B" => $this->dm_low_alloy_steel_B,
            "dm_embrittlement" => $this->dm_embrittlement,
            "dm_embrittlement_A" => $this->dm_embrittlement_A,
            "dm_embrittlement_B" => $this->dm_embrittlement_B,
            "dm_sigma_phase" => $this->dm_sigma_phase,
            "dm_sigma_phase_A" => $this->dm_sigma_phase_A,
            "dm_sigma_phase_B" => $this->dm_sigma_phase_B,
            "dm_piping_mechanical" => $this->dm_piping_mechanical,
            "dm_piping_mechanical_A" => $this->dm_piping_mechanical_A,
            "dm_piping_mechanical_B" => $this->dm_piping_mechanical_B,
        ];

        // if (!is_null($this->year)) {
        //     $arr['year'] = $this->year;
        // }

        return $arr;
    }
}
