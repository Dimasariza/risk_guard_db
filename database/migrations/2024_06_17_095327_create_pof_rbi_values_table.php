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
        Schema::create('pof_rbi_values', function (Blueprint $table) {
            $table->double("rbi_gffTotal")->nullable();
            $table->double("rbi_shellThinning")->nullable();
            $table->double("rbi_headThinning")->nullable();
            $table->double("rbi_shellExternal")->nullable();
            $table->double("rbi_headExternal")->nullable();
            $table->double("rbi_shellTotal")->nullable();
            $table->double("rbi_headTotal")->nullable();
            $table->double("rbi_shellSection")->nullable();
            $table->double("rbi_headSection")->nullable();
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pof_rbi_values');
    }
};
