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
        Schema::create('hotel_room_and_hall_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hotel_room_and_hall_id');
            $table->string('image');
            
            $table->foreign('hotel_room_and_hall_id')->references('id')->on('hotel_room_and_halls')->onDelete('cascade');
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
        Schema::dropIfExists('hotel_room_and_hall_images');
    }
};
