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
        Schema::create('c_o_f_s', function (Blueprint $table) {
            $table->id();
            $table->string("cof_componentId")->unique();
            $table->double("cof_massComponent")->nullable();
            $table->double("cof_massInventory")->nullable();
            $table->string("cof_representativeFluid")->nullable();
            $table->string("cof_phaseOfFluid")->nullable();
            $table->double("cof_releaseHoleSizeD1")->default(6.4);
            $table->double("cof_releaseHoleSizeD2")->default(25);
            $table->double("cof_releaseHoleSizeD3")->default(102);
            $table->double("cof_releaseHoleSizeD4")->default(16);
            $table->string("cof_liquidInventories")->nullable();
            $table->string("cof_detectionSystem")->nullable();
            $table->string("cof_isolationSystem")->nullable();
            $table->string("cof_flamableCons")->nullable();
            $table->string("cof_damageCons")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('c_o_f_s');
    }
};
