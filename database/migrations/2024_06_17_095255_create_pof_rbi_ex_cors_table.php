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
        Schema::create('pof_rbi_ex_cors', function (Blueprint $table) {
            $table->string("rbiExCor_id", 30)->unique();
            $table->string("rbiExCor_componentId");
            $table->double("rbiExCor_equationDesign")->nullable()->default(null);
            $table->double("rbiExCor_interface")->nullable()->default(null);
            $table->double("rbiExCor_tMinMM")->nullable()->default(null);
            $table->double("rbiExCor_tMinInch")->nullable()->default(null);
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pof_rbi_ex_cors');
    }
};
