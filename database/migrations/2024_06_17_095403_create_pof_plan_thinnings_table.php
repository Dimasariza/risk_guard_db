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
            $table->date("planThinning_startDate");
            $table->double("planThinning_thickness");
            $table->double("planThinning_corrosionAllowance");
            $table->double("planThinning_designTemperature");
            $table->double("planThinning_designPressure");
            $table->double("planThinning_operatingTemperature");
            $table->double("planThinning_operatingPressure");
            $table->string("planThinning_designCode");
            $table->string("planThinning_equipmentType");
            $table->string("planThinning_componentType");
            $table->string("planThinning_geometryData");
            $table->string("planThinning_materialSpecification");
            $table->double("planThinning_yieldStrength");
            $table->double("planThinning_tensileStrength");
            $table->integer("planThinning_weldJointEfficiency");
            $table->boolean("planThinning_heatTracing");
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
