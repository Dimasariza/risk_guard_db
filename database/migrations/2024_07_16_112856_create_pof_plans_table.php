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
        Schema::create('pof_plans', function (Blueprint $table) {
            $table->string("plan_id")->unique();
            $table->string("plan_componentId")->unique();
            $table->string("plan_fluidService")->nullable();
            $table->double("plan_typicalTempF")->nullable();
            $table->string("plan_designType")->nullable();
            $table->string("plan_discharge")->nullable();
            $table->string("plan_adjusmentFactor")->nullable();
            $table->string("plan_serviceSeverity")->nullable();
            $table->string("plan_envAdjusmentFactor")->nullable();
            $table->string("plan_inspEffectiveness")->nullable();
            $table->string("plan_confidenceFactor")->nullable();
            $table->string("plan_eventFreqFire")->nullable();
            $table->string("plan_eventFreqOverFilling")->nullable();
            $table->string("plan_protectedEquipment")->nullable();
            $table->date("plan_planDate")->nullable();

            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pof_plans');
    }
};
