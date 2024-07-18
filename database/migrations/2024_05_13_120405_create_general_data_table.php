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
            $table->date("gData_startingDate")->nullable()->default(null);
            $table->string("gData_service")->nullable()->default(null);
            $table->string("gData_manufacturedBy")->nullable()->default(null);
            $table->string("gData_positionType")->nullable()->default(null);
            $table->string("gData_shapeType")->nullable()->default(null);
            $table->string("gData_geometryData")->nullable()->default(null);
            $table->string("gData_code")->nullable()->default(null);
            $table->string("gData_setPressurePsig")->nullable()->default(null);
            $table->string("gData_reliefingTemperatureF")->nullable()->default(null);
            $table->string("gData_allowableOverPress")->nullable()->default(null);
            $table->double("gData_designPressureBar")->nullable()->default(null);
            $table->double("gData_designPressurePsi")->nullable()->default(null);
            $table->double("gData_designTemperatureC")->nullable()->default(null);
            $table->double("gData_designTemperatureR")->nullable()->default(null);
            $table->double("gData_designTemperatureF")->nullable()->default(null);
            $table->double("gData_designTemperatureK")->nullable()->default(null);
            $table->double("gData_operatingPressureBar")->nullable()->default(null);
            $table->double("gData_operatingPressurePsi")->nullable()->default(null);
            $table->double("gData_operatingTemperatureC")->nullable()->default(null);
            $table->double("gData_operatingTemperatureR")->nullable()->default(null);
            $table->double("gData_operatingTemperatureF")->nullable()->default(null);
            $table->double("gData_operatingTemperatureK")->nullable()->default(null);
            $table->integer("gData_dimensionLength")->nullable()->default(null);
            $table->integer("gData_dimensionWidth")->nullable()->default(null);
            $table->integer("gData_vesselVolumeLB")->nullable()->default(null);
            $table->integer("gData_vesselVolumeKG")->nullable()->default(null);
            $table->string("gData_support")->nullable()->default(null);
            $table->double("gData_jointEfficiency")->nullable()->default(null);
            $table->double("gData_yieldStrength")->nullable()->default(null);
            $table->double("gData_tensileStrength")->nullable()->default(null);
            $table->double("gData_corrosionAllowanceMM")->nullable()->default(null);
            $table->double("gData_corrosionAllowanceInch")->nullable()->default(null);
            $table->integer("gData_yearBuilt")->nullable()->default(null);
            $table->string("gData_material")->nullable()->default(null);
            $table->date("gData_lastInspection")->nullable()->default(null);
            $table->double("gData_nominalThicknessMM")->nullable()->default(null);
            $table->double("gData_thickAfterInspMM")->nullable()->default(null);
            $table->double("gData_outerDiameterMM")->nullable()->default(null);
            $table->double("gData_outerDiameterInch")->nullable()->default(null);
            $table->double("gData_allowableStressPsig")->nullable()->default(null);
            $table->double("gData_allowableStressBar")->nullable()->default(null);
            $table->double("gData_allowableStressKpa")->nullable()->default(null);
            $table->double("gData_efficiency")->nullable()->default(null);

            $table->string("gData_shellCode")->nullable()->default(null);
            $table->double("gData_shellMinimumThicknessMM")->nullable()->default(null);
            $table->double("gData_shellMinimumThicknessInch")->nullable()->default(null);
            $table->double("gData_shellCorrosionRateMM")->nullable()->default(null);
            $table->double("gData_shellCorrosionRateInch")->nullable()->default(null);
            $table->double("gData_shellTreqInch")->nullable()->default(null);
            $table->double("gData_shellTreqMM")->nullable()->default(null);
            $table->double("gData_shellMAWP")->nullable()->default(null);

            $table->string("gData_headCode")->nullable()->default(null);
            $table->double("gData_headMinimumThicknessMM")->nullable()->default(null);
            $table->double("gData_headMinimumThicknessInch")->nullable()->default(null);
            $table->double("gData_headCorrosionRateMM")->nullable()->default(null);
            $table->double("gData_headCorrosionRateInch")->nullable()->default(null);
            $table->double("gData_headTreqInch")->nullable()->default(null);
            $table->double("gData_headTreqMM")->nullable()->default(null);
            $table->double("gData_headMAWP")->nullable()->default(null);

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