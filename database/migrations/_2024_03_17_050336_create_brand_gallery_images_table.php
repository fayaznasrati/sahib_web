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
        Schema::create('brand_gallery_images', function (Blueprint $table) {
            $table->id();
            $table->string("image");
            $table->unsignedBigInteger("service_brand_id");
            $table->foreignId("service_brand_id")->constraint("services_brands")->onDelete("cascade");
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
        Schema::dropIfExists('brand_gallery_images');
    }
};
