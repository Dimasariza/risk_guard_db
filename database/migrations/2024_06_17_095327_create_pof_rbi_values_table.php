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
            $table->string("rbiValue_id", 30)->unique();
            $table->double("rbiValue_gffTotal")->nullable();
            $table->double("rbiValue_shellThinning")->nullable();
            $table->double("rbiValue_headThinning")->nullable();
            $table->double("rbiValue_shellExternal")->nullable();
            $table->double("rbiValue_headExternal")->nullable();
            $table->double("rbiValue_shellTotal")->nullable();
            $table->double("rbiValue_headTotal")->nullable();
            $table->double("rbiValue_shellSection")->nullable();
            $table->double("rbiValue_headSection")->nullable();
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
