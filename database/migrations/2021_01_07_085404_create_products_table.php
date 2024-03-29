<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_title')->nullable()->comment('Add the title of the product');
            $table->text('description')->nullable()->comment('Add the description of the product');
            $table->integer('language_id')->unsigned()->nullable()->comment('Language Number To Choose a display language from table const_languages');
            $table->double('price')->comment('Add the price of the product (USD) ');
            $table->string('image_product')->nullable()->comment('Add image or video to product');
            $table->float('qyt')->comment('Add the Quantity of the product (USD) ');
            $table->tinyInteger('status')->default('1')->comment('Status of product to display the product or hide');
            $table->integer('category_id')->unsigned()->comment('To know the product classification and link it to the categories table');
            $table->integer('user_id')->unsigned()->nullable()->comment('User Id from table users');
			$table->softDeletes()->comment('Soft Delete this same (IS Delete) status to check the data is deleted or not');
            $table->timestamps();
        });

        // Schema::table('products', function($table) {
        //     $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
        //     $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
