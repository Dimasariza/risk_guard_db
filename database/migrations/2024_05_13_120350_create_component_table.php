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
        Schema::create('component', function (Blueprint $table) {
            $table->string("comp_id")->unique();
            $table->string("comp_tagOfComponent");
            $table->string("comp_nameOfComponent");
            $table->string("comp_componentType");
            $table->string("comp_equipmentId")->nullable();
            $table->string("comp_userId");
            $table->boolean("comp_addToCalculation")->nullable()->default(false);
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('component');
    }
};
