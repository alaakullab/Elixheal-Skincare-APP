<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqsQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faqs_questions', function (Blueprint $table) {
            $table->id();
            $table->text('question_value')->comment('add question value to faqs');
            $table->integer('language_id')->unsigned()->nullable()->comment('Language Number To Choose a display language from table const_languages');
            $table->integer('user_id')->unsigned()->nullable()->comment('Add User Id from table users');
            $table->timestamps();
        });

        Schema::table('faqs_questions', function($table) {
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
        Schema::dropIfExists('faqs_questions');
    }
}
