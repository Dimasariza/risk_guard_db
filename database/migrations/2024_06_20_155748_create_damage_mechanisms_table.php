<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('damage_mechanisms', function (Blueprint $table) {
            $table->string("dm_id")->unique();
            $table->boolean("dm_thinning")->default(false);
            $table->boolean("dm_comp_linning")->default(false);
            $table->boolean("dm_scc_caustic")->default(false);
            $table->boolean("dm_scc_amine")->default(false);
            $table->boolean("dm_scc_sulfide")->default(false);
            $table->boolean("dm_scc_hic_h2s")->default(false);
            $table->boolean("dm_scc_alkaline")->default(false);
            $table->boolean("dm_scc_polythionic")->default(false);
            $table->boolean("dm_scc_chloride")->default(false);
            $table->boolean("dm_scc_chloride_A")->default(false);
            $table->boolean("dm_scc_chloride_B")->default(false);
            $table->boolean("dm_scc_chloride_C")->default(false);
            $table->boolean("dm_scc_hydrogen")->default(false);
            $table->boolean("dm_scc_hic_hf")->default(false);
            $table->boolean("dm_exCor")->default(false);
            $table->boolean("dm_exCor_A")->default(false);
            $table->boolean("dm_exCor_B")->default(false);
            $table->boolean("dm_exCor_C")->default(false);
            $table->boolean("dm_exCor_D")->default(false);
            $table->boolean("dm_exCor_E")->default(false);
            $table->boolean("dm_exCor_F")->default(false);
            $table->boolean("dm_exCor_G")->default(false);
            $table->boolean("dm_exCor_H")->default(false);
            $table->boolean("dm_exCor_I")->default(false);
            $table->boolean("dm_cor_under_ins")->default(false);
            $table->boolean("dm_exChloride")->default(false);
            $table->boolean("dm_exChloride_A")->default(false);
            $table->boolean("dm_exChloride_B")->default(false);
            $table->boolean("dm_exChloride_C")->default(false);
            $table->boolean("dm_exChloride_D")->default(false);
            $table->boolean("dm_highTemp")->default(false);
            $table->boolean("dm_highTemp_A")->default(false);
            $table->boolean("dm_highTemp_B")->default(false);
            $table->boolean("dm_highTemp_C")->default(false);
            $table->boolean("dm_brittleFracture")->default(false);
            $table->boolean("dm_brittleFracture_A")->default(false);
            $table->boolean("dm_brittleFracture_B")->default(false);
            $table->boolean("dm_low_alloy_steel")->default(false);
            $table->boolean("dm_low_alloy_steel_A")->default(false);
            $table->boolean("dm_low_alloy_steel_B")->default(false);
            $table->boolean("dm_embrittlement")->default(false);
            $table->boolean("dm_embrittlement_A")->default(false);
            $table->boolean("dm_embrittlement_B")->default(false);
            $table->boolean("dm_sigma_phase")->default(false);
            $table->boolean("dm_sigma_phase_A")->default(false);
            $table->boolean("dm_sigma_phase_B")->default(false);
            $table->boolean("dm_piping_mechanical")->default(false);
            $table->boolean("dm_piping_mechanical_A")->default(false);
            $table->boolean("dm_piping_mechanical_B")->default(false);
            $table->string("dm_compId");
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('damage_mechanisms');
    }
};
