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
            $table->integer('quiz_id');
            $table->string('language_id')->nullable()->comment('Language Number To Choose a display language from table const_languages');
			$table->integer('question_id');
            $table->integer('answer_value');
            $table->softDeletes();
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
