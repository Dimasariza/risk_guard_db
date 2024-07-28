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
        Schema::create('corrosion_loop_groups', function (Blueprint $table) {
            $table->string("clGroup_name");
            $table->string("clGroup_clId")->nullable();
            $table->string("clGroup_componentId")->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('corrosion_loop_groups');
    }
};
