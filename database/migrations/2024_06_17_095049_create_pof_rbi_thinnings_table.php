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
            $table->date("rbiThinning_startDate");
            $table->double("rbiThinning_thickness");
            $table->double("rbiThinning_corrosionAllowance");
            $table->double("rbiThinning_designTemperature");
            $table->double("rbiThinning_designPressure");
            $table->double("rbiThinning_operatingTemperature");
            $table->double("rbiThinning_operatingPressure");
            $table->string("rbiThinning_designCode");
            $table->string("rbiThinning_equipmentType");
            $table->string("rbiThinning_componentType");
            $table->string("rbiThinning_geometryData");
            $table->string("rbiThinning_materialSpecification");
            $table->double("rbiThinning_yieldStrength");
            $table->double("rbiThinning_tensileStrength");
            $table->integer("rbiThinning_weldJointEfficiency");
            $table->boolean("rbiThinning_heatTracing")->default(false);
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
