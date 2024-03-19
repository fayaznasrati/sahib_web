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
        Schema::create('food_menus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_brand_id');
            $table->foreign('service_brand_id')->references('id')->on('services_brands')->onDelete('cascade');
            $table->string('name');
            $table->text('description');
            $table->string('price');
            $table->string('slug');
            $table->string('cover');
            $table->tinyinteger('status')->defualt(0);
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
        Schema::dropIfExists('food_menus');
    }
};
