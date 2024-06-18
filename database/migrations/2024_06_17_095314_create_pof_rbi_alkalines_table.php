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
        Schema::create('pof_rbi_alkalines', function (Blueprint $table) {
            $table->boolean("shellSusceptibility")->nullable()->default(false);
            $table->boolean("headSusceptibility")->nullable()->default(false);
            $table->integer("shellSeverityId")->nullable();
            $table->integer("headSeverityId")->nullable();
            $table->integer("sheelSection")->nullable();
            $table->integer("headSection")->nullable();
            $table->double("ageTimeInService")->nullable();
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pof_rbi_alkalines');
    }
};
