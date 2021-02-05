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
            $table->integer('user_id')->unsigned()->nullable()->comment('Add User Id from table users');
            $table->timestamps();
        });

        Schema::table('faqs_answers', function($table) {
            $table->foreignId('faqs_question_id')->constrained('faqs_questions')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
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
