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
            $table->string("gData_componentId");
            $table->string("gData_tagNumber")->nullable()->default(null);
            $table->string("gData_service")->nullable()->default(null);
            $table->string("gData_manufacturedBy")->nullable()->default(null);
            $table->string("gData_typeOfPressureVessel")->nullable()->default(null);
            $table->string("gData_geometryData")->nullable()->default(null);
            $table->string("gData_code")->nullable()->default(null);
            $table->double("gData_designPressure")->nullable()->default(null);
            $table->double("gData_designTemperature")->nullable()->default(null);
            $table->double("gData_operatingPressure")->nullable()->default(null);
            $table->double("gData_operatingTemperature")->nullable()->default(null);
            $table->string("gData_dimmension")->nullable()->default(null);
            $table->integer("gData_vesselVolume")->nullable()->default(null);
            $table->string("gData_support")->nullable()->default(null);
            $table->double("gData_jointEfficiency")->nullable()->default(null);
            $table->double("gData_corrosionAllowance")->nullable()->default(null);
            $table->integer("gData_yearBuilt")->nullable()->default(null);
            $table->string("gData_material")->nullable()->default(null);
            $table->string("gData_lastInspection")->nullable()->default(null);
            $table->string("gData_shellTagNumber")->nullable()->default(null);
            $table->string("gData_shellService")->nullable()->default(null);
            $table->string("gData_shellCode")->nullable()->default(null);
            $table->double("gData_shellDesignPressure")->nullable()->default(null);
            $table->double("gData_shellDesignTemperature")->nullable()->default(null);
            $table->double("gData_shellOuterDiameter")->nullable()->default(null);
            $table->string("gData_shellMaterial")->nullable()->default(null);
            $table->integer("gData_shellAllowableStress")->nullable()->default(null);
            $table->integer("gData_shellEfficiency")->nullable()->default(null);
            $table->double("gData_shellCorrosionAllowance")->nullable()->default(null);
            $table->double("gData_shellMinimumThickness")->nullable()->default(null);
            $table->double("gData_shellCorrosionRate")->nullable()->default(null);
            $table->string("gData_headTagNumber")->nullable()->default(null);
            $table->string("gData_headService")->nullable()->default(null);
            $table->string("gData_headCode")->nullable()->default(null);
            $table->double("gData_headDesignPressure")->nullable()->default(null);
            $table->double("gData_headDesignTemperature")->nullable()->default(null);
            $table->double("gData_headOuterDiameter")->nullable()->default(null);
            $table->string("gData_headMaterial")->nullable()->default(null);
            $table->integer("gData_headAllowableStress")->nullable()->default(null);
            $table->integer("gData_headEfficiency")->nullable()->default(null);
            $table->double("gData_headCorrosionAllowance")->nullable()->default(null);
            $table->double("gData_headMinimumThickness")->nullable()->default(null);
            $table->double("gData_headCorrosionRate")->nullable()->default(null);
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
