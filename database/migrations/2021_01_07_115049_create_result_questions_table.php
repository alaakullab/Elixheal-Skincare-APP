<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('result_questions', function (Blueprint $table) {
            $table->id();
            $table->integer('quiz_id')->comment('To know each quiz by itself');
            $table->string('language_id')->nullable()->comment('Language Number To Choose a display language from table const_languages');
			$table->integer('question_id')->comment('Add question Id from table questions');
            $table->integer('answer_id')->comment('To add const answer value (not result) related to answers table');
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
        Schema::dropIfExists('result_questions');
    }
}
