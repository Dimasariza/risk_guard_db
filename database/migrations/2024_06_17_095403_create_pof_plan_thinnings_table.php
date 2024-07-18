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
        Schema::create('pof_plan_thinnings', function (Blueprint $table) {
            $table->string("planThinning_id", 30)->unique();
            $table->string("planThinning_componentId")->unique();
            $table->double("planThinning_corrosionRate")->nullable();
            $table->date("planThinning_planDate")->nullable();
            $table->double("planThinning_tMinInch")->nullable();
            $table->double("planThinning_tMinMM")->nullable();
            $table->double("planThinning_nInspA")->nullable();
            $table->double("planThinning_nInspB")->nullable();
            $table->double("planThinning_nInspC")->nullable();
            $table->double("planThinning_nInspD")->nullable();
            $table->double("planThinning_injectionPoints")->nullable();
            $table->double("planThinning_deadLegs")->nullable();
            $table->double("planThinning_weldingConstruction")->nullable();
            $table->double("planThinning_astMaintenance")->nullable();
            $table->double("planThinning_settlement")->nullable();
            $table->double("planThinning_onlineMonitoring")->nullable();
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pof_plan_thinnings');
    }
};
