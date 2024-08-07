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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->unique();
            $table->string('user_firstName')->required();
            $table->string('user_lastName')->required();
            $table->string('user_username')->required()->unique();
            $table->string('password')->required();
            $table->string('user_company')->required();
            $table->string('user_jobTitle')->required();
            $table->string('user_phoneNumber')->required();
            $table->string('user_address')->required();
            $table->boolean('user_status')->default(true);
            $table->string('user_email')->unique();
            $table->string('user_picture')->nullable();
            $table->string('user_role')->default("guest");
            $table->timestamp('user_emailVerifiedAt')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
