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
        Schema::table('seller_brands', function (Blueprint $table) {
            $table->string('status')->default(0);
            $table->string('slug')->unique();
            $table->string('branduuid')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('seller_brands', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->dropColumn('slug');
            $table->dropColumn('branduuid');
        });
    }
};
