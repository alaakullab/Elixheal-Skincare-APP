<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->integer('language_id')->unsigned()->nullable()->comment('Language Number To Choose a display language from table const_languages');
            $table->foreign('language_id')->references('id')->on('const_languages')->onDelete('cascade');
            $table->string('question_value')->comment('To add const question value (not result) ');
            $table->string('question_type')->comment('To determine the type of question');
            $table->integer('user_id')->unsigned()->nullable()->comment('User Id from table users');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('questions');
    }
}
