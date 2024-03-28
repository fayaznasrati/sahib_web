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
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string("banneruuid")->unique();
            $table->unsignedBigInteger('user_id');
            $table->string('category')->nullable();
            $table->string('name');
            $table->string('url');
            $table->string('slug')->unique();
            $table->unsignedBigInteger('status')->default(0);
            $table->text('cover');
            $table->text('mobileCover');
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
        Schema::dropIfExists('banners');
    }
};
