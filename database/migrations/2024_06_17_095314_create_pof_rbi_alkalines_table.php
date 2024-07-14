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
            $table->string("rbiAlkaline_componentId");
            $table->double("rbiAlkaline_ph")->nullable();
            $table->string("rbiAlkaline_inspection")->nullable();
            $table->double("rbiAlkaline_numOfInspection")->nullable();
            $table->double("rbiAlkaline_co3Consentration")->nullable();
            $table->double("rbiAlkaline_dfacscc")->nullable();
            $table->boolean("rbiAlkaline_shellPwht")->nullable();
            $table->boolean("rbiAlkaline_headPwht")->nullable();
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
