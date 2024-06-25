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
        Schema::create('pof_plan_ex_cors', function (Blueprint $table) {
            $table->string("planExCor_id", 30)->unique();
            $table->string("planExCor_componentId");
            $table->date("planExCor_yearAssesment")->nullable();
            $table->date("planExCor_yearInstallation")->nullable();
            $table->double("planExCor_thicknessValue")->nullable();
            $table->double("planExCor_baseCorrosionRate")->nullable();
            $table->double("planExCor_finalCorrosionRate")->nullable();
            $table->double("planExCor_shellTimeInService")->nullable();
            $table->double("planExCor_headTimeInService")->nullable();
            $table->double("planExCor_ageCoat")->nullable();
            $table->double("planExCor_adjusmentCoat")->nullable();
            $table->double("planExCor_age")->nullable();
            $table->double("planExCor_minReqWallThickness")->nullable();
            $table->double("planExCor_shellDFParameter")->nullable();
            $table->double("planExCor_headDFParameter")->nullable();
            $table->double("planExCor_flowStress")->nullable();
            $table->double("planExCor_shellStrengthRatio")->nullable();
            $table->double("planExCor_headStrengthRatio")->nullable();
            $table->double("planExCor_numInspA")->nullable();
            $table->double("planExCor_numInspB")->nullable();
            $table->double("planExCor_numInspC")->nullable();
            $table->double("planExCor_numInspD")->nullable();
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pof_plan_ex_cors');
    }
};
