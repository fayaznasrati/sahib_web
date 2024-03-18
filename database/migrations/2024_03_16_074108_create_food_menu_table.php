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
        Schema::create('food_menu', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_brand_id');
            $table->string('food_menu_name');
            $table->text('description')->nullable();
            $table->json('images')->nullable();
            $table->Integer('price')->nullable();
            $table->timestamps();

            // Assuming service_id references service_brand table
            $table->foreign('service_brand_id')->references('id')->on('service_brand')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food_menu');
    }
};
