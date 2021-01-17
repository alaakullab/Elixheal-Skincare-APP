<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('language_id')->unsigned()->nullable()->comment('Language Number To Choose a display language from table const_languages');
            $table->integer('product_id')->unsigned()->nullable()->comment('product  Number To Choose a display language from table products');
            $table->integer('user_id')->unsigned()->nullable()->comment('Add User Id from table users');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('total');
            $table->tinyInteger('delivered');
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
        Schema::dropIfExists('orders');
    }
}
