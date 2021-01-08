<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->string('language_id')->nullable()->comment('Language Number To Choose a display language from table const_languages');;
            $table->string('answer_value')->comment('To add const answer value (not result) ');
            $table->integer('question_id')->unsigned()->comment('Add question Id from table questions');
            $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');
            $table->integer('question_next_id')->unsigned()->comment('Add question Id from table questions to display the next question');
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
        Schema::dropIfExists('answers');
    }
}
