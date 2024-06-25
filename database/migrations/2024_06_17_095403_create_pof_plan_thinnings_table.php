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
            $table->string("planThinning_componentId");
            $table->date("planThinning_startDate")->nullable();
            $table->double("planThinning_thickness")->nullable();
            $table->double("planThinning_corrosionAllowance")->nullable();
            $table->double("planThinning_designTemperature")->nullable();
            $table->double("planThinning_designPressure")->nullable();
            $table->double("planThinning_operatingTemperature")->nullable();
            $table->double("planThinning_operatingPressure")->nullable();
            $table->string("planThinning_designCode")->nullable();
            $table->string("planThinning_equipmentType")->nullable();
            $table->string("planThinning_componentType")->nullable();
            $table->string("planThinning_geometryData")->nullable();
            $table->string("planThinning_materialSpecification")->nullable();
            $table->double("planThinning_yieldStrength")->nullable();
            $table->double("planThinning_tensileStrength")->nullable();
            $table->integer("planThinning_weldJointEfficiency")->nullable();
            $table->boolean("planThinning_heatTracing")->default(false);
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
