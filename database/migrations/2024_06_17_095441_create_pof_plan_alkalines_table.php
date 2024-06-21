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
        Schema::create('pof_plan_alkalines', function (Blueprint $table) {
            $table->string("planAlkaline_id", 30)->unique();
            $table->boolean("planAlkaline_shellSusceptibility")->nullable()->default(false);
            $table->boolean("planAlkaline_headSusceptibility")->nullable()->default(false);
            $table->integer("planAlkaline_shellSeverityId")->nullable();
            $table->integer("planAlkaline_headSeverityId")->nullable();
            $table->integer("planAlkaline_sheelSection")->nullable();
            $table->integer("planAlkaline_headSection")->nullable();
            $table->double("planAlkaline_ageTimeInService")->nullable();
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pof_plan_alkalines');
    }
};
