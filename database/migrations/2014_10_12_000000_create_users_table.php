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
            $table->string('role')->default(0);   // 0 user, 1 admin 2 sub admin
            $table->string('name');
            $table->int('status')->default(1);   // 0 in-active, 1 active
            $table->string('dp_image')->nullable();;
            $table->string('mobile')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('address')->nullable();
            $table->unsignedBigInteger('city_id')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('business')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('city_id')->references('id')->on('afg_cities')->onDelete('cascade');

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
