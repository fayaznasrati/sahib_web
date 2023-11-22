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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string("puuid")->unique();
            $table->unsignedBigInteger('menu_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('sub_menu_id');
            $table->string('name');
            $table->text('status')->default(0);
            $table->text('cover');
            $table->text('colors');
            $table->string('old_price')->nullable();
            $table->string('new_price');
            $table->longtext('title')->nullable();
            $table->longtext('title_desc')->nullable();
            $table->longtext('description')->nullable();
            $table->timestamp('expired_at')->nullable();
            $table->timestamp('post_verified_at')->nullable();
            $table->timestamps();
            $table->foreign('menu_id')->references('id')->on('menus')->onDelete('cascade');
            $table->foreign('sub_menu_id')->references('id')->on('submenus')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
