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
        Schema::create('pof_rbis', function (Blueprint $table) {
            $table->string("rbi_id")->unique();
            $table->string("rbi_componentId")->unique();
            $table->string("rbi_fluidService")->nullable();
            $table->string("rbi_typicalTempF")->nullable();
            $table->string("rbi_designType")->nullable();
            $table->string("rbi_discharge")->nullable();
            $table->string("rbi_adjusmentFactor")->nullable();
            $table->string("rbi_serviceSeverity")->nullable();
            $table->string("rbi_envAdjusmentFactor")->nullable();
            $table->string("rbi_inspEffectiveness")->nullable();
            $table->string("rbi_confidenceFactor")->nullable();
            $table->string("rbi_eventFreqFire")->nullable();
            $table->string("rbi_eventFreqOverFilling")->nullable();
            $table->string("rbi_protectedEquipment")->nullable();
            $table->string("rbi_dfValue")->nullable();
            $table->string("rbi_failureFrequency")->nullable();
            $table->double("rbi_damageFactor")->nullable();
            $table->date("rbi_rbiDate")->nullable();
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pof_rbis');
    }
};
