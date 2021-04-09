<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('sub_title')->nullable();
            $table->longtext('desc')->nullable();
            $table->string('hyperlink')->nullable();
            $table->string('media_path');
            $table->string('media_type')->comment('Add media_type use getClientMimeType function');
            $table->string('media_extension')->comment('Add media_extension use guessClientExtension function');
            $table->integer('media_size')->comment('Add media_size use getClientSize function');
            $table->integer('user_id')->unsigned()->comment('Add User Id from table users');
            $table->integer('language_id')->unsigned()->nullable()->comment('Language Number To Choose a display language from table const_languages');
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
        Schema::dropIfExists('abouts');
    }
}
