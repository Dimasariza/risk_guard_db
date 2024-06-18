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
            $table->date("startDate");
            $table->double("thickness");
            $table->double("corrosionAllowance");
            $table->double("designTemperature");
            $table->double("designPressure");
            $table->double("operatingTemperature");
            $table->double("operatingPressure");
            $table->string("designCode");
            $table->string("equipmentType");
            $table->string("componentType");
            $table->string("geometryData");
            $table->string("materialSpecification");
            $table->double("yieldStrength");
            $table->double("tensileStrength");
            $table->integer("weldJointEfficiency");
            $table->boolean("heatTracing");
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
