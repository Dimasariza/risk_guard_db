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
            $table->string("planAlkaline_componentId");
            $table->double("planAlkaline_ph")->nullable();
            $table->string("planAlkaline_inspection")->nullable();
            $table->double("planAlkaline_numOfInspection")->nullable();
            $table->double("planAlkaline_co3Consentration")->nullable();
            $table->double("planAlkaline_dfacscc")->nullable();
            $table->boolean("planAlkaline_shellPwht")->nullable();
            $table->boolean("planAlkaline_headPwht")->nullable();
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
