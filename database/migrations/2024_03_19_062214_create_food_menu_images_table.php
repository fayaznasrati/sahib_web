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
        Schema::create('food_menu_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('food_menu_id');
            $table->string('image');
            
            $table->foreign('food_menu_id')->references('id')->on('food_menus')->onDelete('cascade');
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
        Schema::dropIfExists('food_menu_images');
    }
};
