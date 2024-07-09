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
        Schema::create('pof_rbi_thinnings', function (Blueprint $table) {
            $table->string("rbiThinning_id", 30)->unique();
            $table->string("rbiThinning_componentId");
            $table->double("rbiThinning_corrosionRate")->nullable();
            $table->date("rbiThinning_rbiDate")->nullable();
            $table->double("rbiThinning_tMinInch")->nullable();
            $table->double("rbiThinning_tMinMM")->nullable();
            $table->double("rbiThinning_nInspA")->nullable();
            $table->double("rbiThinning_nInspB")->nullable();
            $table->double("rbiThinning_nInspC")->nullable();
            $table->double("rbiThinning_nInspD")->nullable();
            $table->double("rbiThinning_injectionPoints")->nullable();
            $table->double("rbiThinning_deadLegs")->nullable();
            $table->double("rbiThinning_weldingConstruction")->nullable();
            $table->double("rbiThinning_astMaintenance")->nullable();
            $table->double("rbiThinning_settlement")->nullable();
            $table->double("rbiThinning_onlineMonitoring")->nullable();
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pof_rbi_thinnings');
    }
};
