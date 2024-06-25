<?php

namespace App\DTO\DamageMechanism;

use App\Http\Requests\DamageMechanism\CreateDamageMechanismRequest;
use Illuminate\Support\Str;

class InsertDamageMechanismDTO
{
    public function __construct(
        public readonly string $dm_componentId,
        public readonly ?string $dm_thinning = "0",
        public readonly ?string $dm_comp_linning = "0",
        public readonly ?string $dm_scc_caustic = "0",
        public readonly ?string $dm_scc_amine = "0",
        public readonly ?string $dm_scc_sulfide = "0",
        public readonly ?string $dm_scc_hic_h2s = "0",
        public readonly ?string $dm_scc_alkaline = "0",
        public readonly ?string $dm_scc_polythionic = "0",
        public readonly ?string $dm_scc_chloride_A = "0",
        public readonly ?string $dm_scc_chloride_B = "0",
        public readonly ?string $dm_scc_chloride_C = "0",
        public readonly ?string $dm_scc_hydrogen = "0",
        public readonly ?string $dm_scc_hic_hf = "0",
        public readonly ?string $dm_exCor_A = "0",
        public readonly ?string $dm_exCor_B = "0",
        public readonly ?string $dm_exCor_C = "0",
        public readonly ?string $dm_exCor_D = "0",
        public readonly ?string $dm_exCor_E = "0",
        public readonly ?string $dm_exCor_F = "0",
        public readonly ?string $dm_exCor_G = "0",
        public readonly ?string $dm_exCor_H = "0",
        public readonly ?string $dm_exCor_I = "0",
        public readonly ?string $dm_cor_under_ins = "0",
        public readonly ?string $dm_exChloride_A = "0",
        public readonly ?string $dm_exChloride_B = "0",
        public readonly ?string $dm_exChloride_C = "0",
        public readonly ?string $dm_exChloride_D = "0",
        public readonly ?string $dm_highTemp_A = "0",
        public readonly ?string $dm_highTemp_B = "0",
        public readonly ?string $dm_highTemp_C = "0",
        public readonly ?string $dm_brittleFracture_A = "0",
        public readonly ?string $dm_brittleFracture_B = "0",
        public readonly ?string $dm_low_alloy_steel_A = "0",
        public readonly ?string $dm_low_alloy_steel_B = "0",
        public readonly ?string $dm_embrittlement_A = "0",
        public readonly ?string $dm_embrittlement_B = "0",
        public readonly ?string $dm_sigma_phase_A = "0",
        public readonly ?string $dm_sigma_phase_B = "0",
        public readonly ?string $dm_piping_mechanical_A = "0",
        public readonly ?string $dm_piping_mechanical_B = "0",
        public readonly ?string $dm_compId = "0",
    ) {
    }

    public static function fromRequest(CreateDamageMechanismRequest $request): self
    {
        return new self(
            dm_componentId: $request->validated("dm_componentId")
        );
    }

    public function build(): array
    {
        return [
            "dm_id" => Str::random(9),
            "dm_componentId" => $this->dm_componentId,
            "dm_thinning" => $this->dm_thinning,
            "dm_comp_linning" => $this->dm_comp_linning,
            "dm_scc_caustic" => $this->dm_scc_caustic,
            "dm_scc_amine" => $this->dm_scc_amine,
            "dm_scc_sulfide" => $this->dm_scc_sulfide,
            "dm_scc_hic_h2s" => $this->dm_scc_hic_h2s,
            "dm_scc_alkaline" => $this->dm_scc_alkaline,
            "dm_scc_polythionic" => $this->dm_scc_polythionic,
            "dm_scc_chloride_A" => $this->dm_scc_chloride_A,
            "dm_scc_chloride_B" => $this->dm_scc_chloride_B,
            "dm_scc_chloride_C" => $this->dm_scc_chloride_C,
            "dm_scc_hydrogen" => $this->dm_scc_hydrogen,
            "dm_scc_hic_hf" => $this->dm_scc_hic_hf,
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
            "dm_exChloride_A" => $this->dm_exChloride_A,
            "dm_exChloride_B" => $this->dm_exChloride_B,
            "dm_exChloride_C" => $this->dm_exChloride_C,
            "dm_exChloride_D" => $this->dm_exChloride_D,
            "dm_highTemp_A" => $this->dm_highTemp_A,
            "dm_highTemp_B" => $this->dm_highTemp_B,
            "dm_highTemp_C" => $this->dm_highTemp_C,
            "dm_brittleFracture_A" => $this->dm_brittleFracture_A,
            "dm_brittleFracture_B" => $this->dm_brittleFracture_B,
            "dm_low_alloy_steel_A" => $this->dm_low_alloy_steel_A,
            "dm_low_alloy_steel_B" => $this->dm_low_alloy_steel_B,
            "dm_embrittlement_A" => $this->dm_embrittlement_A,
            "dm_embrittlement_B" => $this->dm_embrittlement_B,
            "dm_sigma_phase_A" => $this->dm_sigma_phase_A,
            "dm_sigma_phase_B" => $this->dm_sigma_phase_B,
            "dm_piping_mechanical_A" => $this->dm_piping_mechanical_A,
            "dm_piping_mechanical_B" => $this->dm_piping_mechanical_B,
            "dm_compId" => $this->dm_compId,
        ];
    }
}
