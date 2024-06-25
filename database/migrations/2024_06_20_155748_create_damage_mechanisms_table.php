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
            $table->string("dm_componentId");
            $table->boolean("dm_thinning")->nullable()->default(null);
            $table->boolean("dm_comp_linning")->nullable()->default(null);
            $table->boolean("dm_scc_caustic")->nullable()->default(null);
            $table->boolean("dm_scc_amine")->nullable()->default(null);
            $table->boolean("dm_scc_sulfide")->nullable()->default(null);
            $table->boolean("dm_scc_hic_h2s")->nullable()->default(null);
            $table->boolean("dm_scc_alkaline")->nullable()->default(null);
            $table->boolean("dm_scc_polythionic")->nullable()->default(null);
            $table->boolean("dm_scc_chloride")->nullable()->default(null);
            $table->boolean("dm_scc_chloride_A")->nullable()->default(null);
            $table->boolean("dm_scc_chloride_B")->nullable()->default(null);
            $table->boolean("dm_scc_chloride_C")->nullable()->default(null);
            $table->boolean("dm_scc_hydrogen")->nullable()->default(null);
            $table->boolean("dm_scc_hic_hf")->nullable()->default(null);
            $table->boolean("dm_exCor")->nullable()->default(null);
            $table->boolean("dm_exCor_A")->nullable()->default(null);
            $table->boolean("dm_exCor_B")->nullable()->default(null);
            $table->boolean("dm_exCor_C")->nullable()->default(null);
            $table->boolean("dm_exCor_D")->nullable()->default(null);
            $table->boolean("dm_exCor_E")->nullable()->default(null);
            $table->boolean("dm_exCor_F")->nullable()->default(null);
            $table->boolean("dm_exCor_G")->nullable()->default(null);
            $table->boolean("dm_exCor_H")->nullable()->default(null);
            $table->boolean("dm_exCor_I")->nullable()->default(null);
            $table->boolean("dm_cor_under_ins")->nullable()->default(null);
            $table->boolean("dm_exChloride")->nullable()->default(null);
            $table->boolean("dm_exChloride_A")->nullable()->default(null);
            $table->boolean("dm_exChloride_B")->nullable()->default(null);
            $table->boolean("dm_exChloride_C")->nullable()->default(null);
            $table->boolean("dm_exChloride_D")->nullable()->default(null);
            $table->boolean("dm_highTemp")->nullable()->default(null);
            $table->boolean("dm_highTemp_A")->nullable()->default(null);
            $table->boolean("dm_highTemp_B")->nullable()->default(null);
            $table->boolean("dm_highTemp_C")->nullable()->default(null);
            $table->boolean("dm_brittleFracture")->nullable()->default(null);
            $table->boolean("dm_brittleFracture_A")->nullable()->default(null);
            $table->boolean("dm_brittleFracture_B")->nullable()->default(null);
            $table->boolean("dm_low_alloy_steel")->nullable()->default(null);
            $table->boolean("dm_low_alloy_steel_A")->nullable()->default(null);
            $table->boolean("dm_low_alloy_steel_B")->nullable()->default(null);
            $table->boolean("dm_embrittlement")->nullable()->default(null);
            $table->boolean("dm_embrittlement_A")->nullable()->default(null);
            $table->boolean("dm_embrittlement_B")->nullable()->default(null);
            $table->boolean("dm_sigma_phase")->nullable()->default(null);
            $table->boolean("dm_sigma_phase_A")->nullable()->default(null);
            $table->boolean("dm_sigma_phase_B")->nullable()->default(null);
            $table->boolean("dm_piping_mechanical")->nullable()->default(null);
            $table->boolean("dm_piping_mechanical_A")->nullable()->default(null);
            $table->boolean("dm_piping_mechanical_B")->nullable()->default(null);
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
