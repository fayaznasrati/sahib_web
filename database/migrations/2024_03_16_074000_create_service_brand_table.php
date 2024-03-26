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
        Schema::create('service_brand', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('service_id');
            $table->string('logo')->nullable();
            $table->string('brand_name');
            $table->string('city')->nullable();
            $table->string('address');
            $table->string('phone_number');
            $table->string('whatsapp_number');
            $table->string('email');
            $table->string('brand_found_date')->nullable();
            $table->text('about')->nullable();
            $table->string('brand_certificate_no')->nullable();
            $table->string('brand_certificate_img')->nullable();
            $table->text('brand_policy')->nullable();
            $table->text('description');
            $table->timestamps();

            // Define foreign key constraints
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // Assuming service_id references another table
            $table->foreign('service_id')->references('id')->on('service_name')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_brand');
    }
};
