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
        Schema::create('pof_rbi_ex_cors', function (Blueprint $table) {
            $table->date("yearAssesment")->nullable();
            $table->date("yearInstallation")->nullable();
            $table->double("thicknessValue")->nullable();
            $table->double("baseCorrosionRate")->nullable();
            $table->double("finalCorrosionRate")->nullable();
            $table->double("shellTimeInService")->nullable();
            $table->double("headTimeInService")->nullable();
            $table->double("ageCoat")->nullable();
            $table->double("adjusmentCoat")->nullable();
            $table->double("age")->nullable();
            $table->double("minReqWallThickness")->nullable();
            $table->double("shellDFParameter")->nullable();
            $table->double("headDFParameter")->nullable();
            $table->double("flowStress")->nullable();
            $table->double("shellStrengthRatio")->nullable();
            $table->double("headStrengthRatio")->nullable();
            $table->double("numInspA")->nullable();
            $table->double("numInspB")->nullable();
            $table->double("numInspC")->nullable();
            $table->double("numInspD")->nullable();
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pof_rbi_ex_cors');
    }
};
