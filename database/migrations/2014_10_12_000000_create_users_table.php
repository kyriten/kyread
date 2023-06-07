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
            $table->string('fullname')->nullable();
            $table->string('nickname')->nullable();
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('about')->nullable();
            $table->bigInteger('phone')->nullable();
            $table->string('street')->nullable();
            $table->string('city')->nullable();
            $table->string('province')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('password');
            $table->string('password_confirmation');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
