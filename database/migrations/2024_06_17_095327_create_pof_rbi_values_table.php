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
            $table->string("rbiValue_componentId");
            $table->double("rbiValue_FMS")->nullable();
            $table->string("rbiValue_failureFrequency")->nullable();
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
