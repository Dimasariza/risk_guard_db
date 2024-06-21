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
        Schema::create('pof_plan_values', function (Blueprint $table) {
            $table->string("planValue_id", 30)->unique();
            $table->double("planValue_gffTotal")->nullable();
            $table->double("planValue_shellThinning")->nullable();
            $table->double("planValue_headThinning")->nullable();
            $table->double("planValue_shellExternal")->nullable();
            $table->double("planValue_headExternal")->nullable();
            $table->double("planValue_shellTotal")->nullable();
            $table->double("planValue_headTotal")->nullable();
            $table->double("planValue_shellSection")->nullable();
            $table->double("planValue_headSection")->nullable();
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pof_plan_values');
    }
};
