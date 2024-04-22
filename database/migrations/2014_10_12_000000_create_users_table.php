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
            $table->string('name')->nullable();
            $table->string('email');
            $table->string('username');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role')->nullable();
            $table->string('rutaF1')->nullable();
            $table->string('rutaF2')->nullable();
            $table->string('rutaF3')->nullable();
            $table->string('rutaF4')->nullable();
            $table->string('rutaF5')->nullable();
            $table->string('rutaF6')->nullable();
            $table->string('rutaF7')->nullable();
            $table->string('rutaF8')->nullable();
            $table->string('rutaF9')->nullable();
            $table->string('rutaF10')->nullable();
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
