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
        Schema::create('corrosion_loops', function (Blueprint $table) {
            $table->string("cl_id")->unique();
            $table->string("cl_userId")->unique();
            $table->string("cl_name");
            $table->string("cl_fileId");
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('corrosion_loops');
    }
};
