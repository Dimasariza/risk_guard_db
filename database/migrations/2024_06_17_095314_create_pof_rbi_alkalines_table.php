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
            $table->string("rbiAlkaline_id", 30)->unique();
            $table->boolean("rbiAlkaline_shellSusceptibility")->nullable()->default(false);
            $table->boolean("rbiAlkaline_headSusceptibility")->nullable()->default(false);
            $table->integer("rbiAlkaline_shellSeverityId")->nullable();
            $table->integer("rbiAlkaline_headSeverityId")->nullable();
            $table->integer("rbiAlkaline_sheelSection")->nullable();
            $table->integer("rbiAlkaline_headSection")->nullable();
            $table->double("rbiAlkaline_ageTimeInService")->nullable();
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
