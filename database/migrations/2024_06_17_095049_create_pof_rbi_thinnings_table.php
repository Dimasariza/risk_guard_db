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
            $table->date("rbiThinning_startDate")->nullable();
            $table->double("rbiThinning_thickness")->nullable();
            $table->double("rbiThinning_corrosionAllowance")->nullable();
            $table->double("rbiThinning_designTemperature")->nullable();
            $table->double("rbiThinning_designPressure")->nullable();
            $table->double("rbiThinning_operatingTemperature")->nullable();
            $table->double("rbiThinning_operatingPressure")->nullable();
            $table->string("rbiThinning_designCode")->nullable();
            $table->string("rbiThinning_equipmentType")->nullable();
            $table->string("rbiThinning_componentType")->nullable();
            $table->string("rbiThinning_geometryData")->nullable();
            $table->string("rbiThinning_materialSpecification")->nullable();
            $table->double("rbiThinning_yieldStrength")->nullable();
            $table->double("rbiThinning_tensileStrength")->nullable();
            $table->integer("rbiThinning_weldJointEfficiency")->nullable();
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
