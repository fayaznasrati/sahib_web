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
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string("slideruuid")->unique();
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->string('url');
            $table->string('slug')->unique();
            $table->longtext('description')->nullable();
            $table->text('note');
            $table->unsignedBigInteger('status')->default(0);
            $table->text('cover');
            $table->string('old_price')->nullable();
            $table->string('new_price');
            $table->string('offer');
            $table->timestamp('expired_at')->nullable();
            $table->timestamps();
            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sliders');
    }
};
