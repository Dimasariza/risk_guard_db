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
        Schema::create('general_data', function (Blueprint $table) {
            $table->string("gData_tagNumber");
            $table->string("gData_service");
            $table->string("gData_manufacturedBy");
            $table->string("gData_typeOfPressureVessel");
            $table->string("gData_geometryData");
            $table->string("gData_code");
            $table->double("gData_designPressure");
            $table->double("gData_operatingPressure");
            $table->double("gData_operatingTemperature");
            $table->string("gData_dimmension");
            $table->int("gData_vesselVolume");
            $table->string("gData_support");
            $table->double("gData_jointEfficiency");
            $table->double("gData_corrosionAllowance");
            $table->int("gData_yearBuilt");
            $table->string("gData_material");
            $table->date("gData_lastInspection");
            $table->string("gData_shellTagNumber");
            $table->string("gData_shellService");
            $table->string("gData_shellCode");
            $table->double("gData_shellDesignPressure");
            $table->double("gData_shellDesignTemperature");
            $table->double("gData_shellOuterDiameter");
            $table->string("gData_shellMaterial");
            $table->int("gData_shellAllowableStress");
            $table->int("gData_shellEfficiency");
            $table->double("gData_shellCorrosionAllowance");
            $table->double("gData_shellMinimumThickness");
            $table->double("gData_shellCorrosionRate");
            $table->string("gData_headTagNumber");
            $table->string("gData_headService");
            $table->string("gData_headCode");
            $table->double("gData_headDesignPressure");
            $table->double("gData_headDesignTemperature");
            $table->double("gData_headOuterDiameter");
            $table->string("gData_headMaterial");
            $table->int("gData_headAllowableStress");
            $table->int("gData_headEfficiency");
            $table->double("gData_headCorrosionAllowance");
            $table->double("gData_headMinimumThickness");
            $table->double("gData_headCorrosionRate");
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general_data');
    }
};
