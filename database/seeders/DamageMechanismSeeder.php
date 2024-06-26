<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DamageMechanismSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("damage_mechanisms")->insert([
            "dm_id" => "rndmDm01",
            "dm_thinning" => false,
            "dm_comp_linning" => false,
            "dm_scc_caustic" => false,
            "dm_scc_amine" => false,
            "dm_scc_sulfide" => false,
            "dm_scc_hic_h2s" => false,
            "dm_scc_alkaline" => false,
            "dm_scc_polythionic" => false,
            "dm_scc_chloride_A" => false,
            "dm_scc_chloride_B" => false,
            "dm_scc_chloride_C" => false,
            "dm_scc_hydrogen" => false,
            "dm_scc_hic_hf" => false,
            "dm_exCor_A" => false,
            "dm_exCor_B" => false,
            "dm_exCor_C" => false,
            "dm_exCor_D" => false,
            "dm_exCor_E" => false,
            "dm_exCor_F" => false,
            "dm_exCor_G" => false,
            "dm_exCor_H" => false,
            "dm_exCor_I" => false,
            "dm_cor_under_ins" => false,
            "dm_exChloride_A" => false,
            "dm_exChloride_B" => false,
            "dm_exChloride_C" => false,
            "dm_exChloride_D" => false,
            "dm_highTemp_A" => false,
            "dm_highTemp_B" => false,
            "dm_highTemp_C" => false,
            "dm_brittleFracture_A" => false,
            "dm_brittleFracture_B" => false,
            "dm_low_alloy_steel_A" => false,
            "dm_low_alloy_steel_B" => false,
            "dm_embrittlement_A" => false,
            "dm_embrittlement_B" => false,
            "dm_sigma_phase_A" => false,
            "dm_sigma_phase_B" => false,
            "dm_piping_mechanical_A" => false,
            "dm_piping_mechanical_B" => false,
            "dm_componentId" => "rndComp01"
        ]);
    }
}
