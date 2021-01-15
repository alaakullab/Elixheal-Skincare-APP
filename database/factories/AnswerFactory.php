<?php

namespace Database\Factories;

use App\Models\Answer;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnswerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Answer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $word = $this->faker->word;
        return [
            'answer_value' => $word,
            'language_id' => function (){
                return \App\Models\const_languages::all()->random();
            },
            'question_id' => function (){
                return \App\Models\question::all()->random();
            },
            'user_id' => function () {
                return \App\Models\User::all()->random();
            },

        ];
    }
}
