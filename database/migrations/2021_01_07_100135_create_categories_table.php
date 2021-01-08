<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('constant value');
            $table->string('slug')->comment('A slug is the part of a URL which identifies a particular page on a website in an easy to read form');;
            $table->string('language_id')->nullable()->comment('Language Number To Choose a display language from table const_languages');
			$table->softDeletes()->comment('Soft Delete this same (IS Delete) status to check the data is deleted or not');
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
        Schema::dropIfExists('categories');
    }
}
