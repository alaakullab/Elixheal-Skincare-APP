<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqsAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faqs_answers', function (Blueprint $table) {
            $table->id();
            $table->text('answers_value')->comment('add answers value to faqs');
            $table->integer('faqs_question_id')->comment('Add question Id from table questions');
            $table->foreign('faqs_question_id')->references('id')->on('faqs_questions')->onDelete('cascade');
            $table->integer('user_id')->unsigned()->nullable()->comment('Add User Id from table users');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('faqs_answers');
    }
}
