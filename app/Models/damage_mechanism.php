<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class damage_mechanism extends Model
{
    use HasFactory;
    protected $fillable = [
        "dm_id",
        "dm_thinning",
        "dm_comp_linning",
        "dm_scc_caustic",
        "dm_scc_amine",
        "dm_scc_sulfide",
        "dm_scc_hic_h2s",
        "dm_scc_alkaline",
        "dm_scc_polythionic",
        "dm_scc_chloride",
        "dm_scc_chloride_A",
        "dm_scc_chloride_B",
        "dm_scc_chloride_C",
        "dm_scc_hydrogen",
        "dm_scc_hic_hf",
        "dm_exCor",
        "dm_exCor_A",
        "dm_exCor_B",
        "dm_exCor_C",
        "dm_exCor_D",
        "dm_exCor_E",
        "dm_exCor_F",
        "dm_exCor_G",
        "dm_exCor_H",
        "dm_exCor_I",
        "dm_cor_under_ins",
        "dm_exChloride",
        "dm_exChloride_A",
        "dm_exChloride_B",
        "dm_exChloride_C",
        "dm_exChloride_D",
        "dm_highTemp",
        "dm_highTemp_A",
        "dm_highTemp_B",
        "dm_highTemp_C",
        "dm_brittleFracture",
        "dm_brittleFracture_A",
        "dm_brittleFracture_B",
        "dm_low_alloy_steel",
        "dm_low_alloy_steel_A",
        "dm_low_alloy_steel_B",
        "dm_embrittlement",
        "dm_embrittlement_A",
        "dm_embrittlement_B",
        "dm_sigma_phase",
        "dm_sigma_phase_A",
        "dm_sigma_phase_B",
        "dm_piping_mechanical",
        "dm_piping_mechanical_A",
        "dm_piping_mechanical_B",
        "dm_compId",
    ];
}
