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
        Schema::create('rbi_thinning_screening_questions', function (Blueprint $table) {
            $table->string("rbiSQ_componentId")->unique();
            $table->boolean("rbiSQ_HCLContain")->nullable()->default(null);
            $table->boolean("rbiSQ_HCLIsFreeWater")->nullable()->default(null);
            $table->boolean("rbiSQ_HCLphUnder7")->nullable()->default(null);
            $table->boolean("rbiSQ_SulfidicContainOil")->nullable()->default(null);
            $table->boolean("rbiSQ_SulfidicTempOver204")->nullable()->default(null);
            $table->boolean("rbiSQ_SulfuricContainH2SO4")->nullable()->default(null);
            $table->boolean("rbiSQ_H2SH2containH2s")->nullable()->default(null);
            $table->boolean("rbiSQ_H2SH2TempOver204")->nullable()->default(null);
            $table->boolean("rbiSQ_HydrifluoricContainHF")->nullable()->default(null);
            $table->boolean("rbiSQ_SourWaterIsFreeH2S")->nullable()->default(null);
            $table->boolean("rbiSQ_AmineIsEquipment")->nullable()->default(null);
            $table->boolean("rbiSQ_OxidationTempOver482")->nullable()->default(null);
            $table->boolean("rbiSQ_OxidationOxigenPresent")->nullable()->default(null);
            $table->boolean("rbiSQ_AcidphUnder7")->nullable()->default(null);
            $table->boolean("rbiSQ_AcidContainPPM")->nullable()->default(null);
            $table->boolean("rbiSQ_CoolingIsEquipment")->nullable()->default(null);
            $table->boolean("rbiSQ_SoilSideIsEquipment")->nullable()->default(null);
            $table->boolean("rbiSQ_SoilSideIsMaterial")->nullable()->default(null);
            $table->boolean("rbiSQ_CO2IsFreeWater")->nullable()->default(null);
            $table->boolean("rbiSQ_CO2IsMaterial")->nullable()->default(null);
            $table->boolean("rbiSQ_ASTIsEquipment")->nullable()->default(null);
            $table->text("rbiSQ_notesHCLphUnder7")->nullable()->default(null);
            $table->text("rbiSQ_notessulfidicTempOver204")->nullable()->default(null);
            $table->text("rbiSQ_notesH2SH2")->nullable()->default(null);
            $table->text("rbiSQ_notesOxidatoin")->nullable()->default(null);
            $table->text("rbiSQ_notesAcid")->nullable()->default(null);
            $table->text("rbiSQ_notesCO2")->nullable()->default(null);
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rbi_thinning_screening_questions');
    }
};
