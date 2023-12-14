<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seller_brands', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->string('brand_logo')->nullable();
            $table->string('mobile')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('address')->nullable();
            $table->unsignedBigInteger('city_id')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('brand_certificate_img')->nullable();
            $table->string('brand_certificate_no')->nullable();
            $table->string('brand_found_date')->nullable();
            $table->string('brand_polices')->nullable();
            $table->string('email')->unique();
            $table->foreign('city_id')->references('id')->on('afg_cities')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seller_brands');
    }
};
