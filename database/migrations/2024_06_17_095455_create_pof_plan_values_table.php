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
            $table->string("planValue_componentId");
            $table->double("planValue_FMS")->nullable();
            $table->string("planValue_failureFrequency")->nullable();
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
