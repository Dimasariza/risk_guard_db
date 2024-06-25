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
            $table->string("rbiExCor_id", 30)->unique();
            $table->string("rbiExCor_componentId");
            $table->date("rbiExCor_yearAssesment")->nullable();
            $table->date("rbiExCor_yearInstallation")->nullable();
            $table->double("rbiExCor_thicknessValue")->nullable();
            $table->double("rbiExCor_baseCorrosionRate")->nullable();
            $table->double("rbiExCor_finalCorrosionRate")->nullable();
            $table->double("rbiExCor_shellTimeInService")->nullable();
            $table->double("rbiExCor_headTimeInService")->nullable();
            $table->double("rbiExCor_ageCoat")->nullable();
            $table->double("rbiExCor_adjusmentCoat")->nullable();
            $table->double("rbiExCor_age")->nullable();
            $table->double("rbiExCor_minReqWallThickness")->nullable();
            $table->double("rbiExCor_shellDFParameter")->nullable();
            $table->double("rbiExCor_headDFParameter")->nullable();
            $table->double("rbiExCor_flowStress")->nullable();
            $table->double("rbiExCor_shellStrengthRatio")->nullable();
            $table->double("rbiExCor_headStrengthRatio")->nullable();
            $table->double("rbiExCor_numInspA")->nullable();
            $table->double("rbiExCor_numInspB")->nullable();
            $table->double("rbiExCor_numInspC")->nullable();
            $table->double("rbiExCor_numInspD")->nullable();
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
