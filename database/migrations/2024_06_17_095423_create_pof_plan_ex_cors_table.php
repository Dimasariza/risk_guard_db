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
        Schema::create('pof_plan_ex_cors', function (Blueprint $table) {
            $table->string("planExCor_id", 30)->unique();
            $table->string("planExCor_componentId");
            $table->double("planExCor_equationDesign")->nullable()->default(null);
            $table->double("planExCor_interface")->nullable()->default(null);
            $table->double("planExCor_tMinMM")->nullable()->default(null);
            $table->double("planExCor_tMinInch")->nullable()->default(null);
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pof_plan_ex_cors');
    }
};
