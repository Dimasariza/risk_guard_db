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
            $table->string("gData_id")->unique();
            $table->string("gData_componentId")->nullable();
            $table->string("gData_tagNumber")->nullable();
            $table->string("gData_service")->nullable();
            $table->string("gData_manufacturedBy")->nullable();
            $table->string("gData_typeOfPressureVessel")->nullable();
            $table->string("gData_geometryData")->nullable();
            $table->string("gData_code")->nullable();
            $table->double("gData_designPressure")->nullable();
            $table->double("gData_designTemperature")->nullable();
            $table->double("gData_operatingPressure")->nullable();
            $table->double("gData_operatingTemperature")->nullable();
            $table->string("gData_dimmension")->nullable();
            $table->integer("gData_vesselVolume")->nullable();
            $table->string("gData_support")->nullable();
            $table->double("gData_jointEfficiency")->nullable();
            $table->double("gData_corrosionAllowance")->nullable();
            $table->integer("gData_yearBuilt")->nullable();
            $table->string("gData_material")->nullable();
            $table->string("gData_lastInspection")->nullable();
            $table->string("gData_shellTagNumber")->nullable();
            $table->string("gData_shellService")->nullable();
            $table->string("gData_shellCode")->nullable();
            $table->double("gData_shellDesignPressure")->nullable();
            $table->double("gData_shellDesignTemperature")->nullable();
            $table->double("gData_shellOuterDiameter")->nullable();
            $table->string("gData_shellMaterial")->nullable();
            $table->integer("gData_shellAllowableStress")->nullable();
            $table->integer("gData_shellEfficiency")->nullable();
            $table->double("gData_shellCorrosionAllowance")->nullable();
            $table->double("gData_shellMinimumThickness")->nullable();
            $table->double("gData_shellCorrosionRate")->nullable();
            $table->string("gData_headTagNumber")->nullable();
            $table->string("gData_headService")->nullable();
            $table->string("gData_headCode")->nullable();
            $table->double("gData_headDesignPressure")->nullable();
            $table->double("gData_headDesignTemperature")->nullable();
            $table->double("gData_headOuterDiameter")->nullable();
            $table->string("gData_headMaterial")->nullable();
            $table->integer("gData_headAllowableStress")->nullable();
            $table->integer("gData_headEfficiency")->nullable();
            $table->double("gData_headCorrosionAllowance")->nullable();
            $table->double("gData_headMinimumThickness")->nullable();
            $table->double("gData_headCorrosionRate")->nullable();
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
