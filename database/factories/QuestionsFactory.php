<?php

namespace Database\Factories;

use App\Models\questions;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = questions::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence;
        $word = $this->faker->word;
        return [
            'question_value' => $title,
            'question_type' =>  $word,
            'language_id' => function (){
                return \App\Models\const_languages::all()->random();
            },
            'user_id' => function () {
                return \App\Models\User::all()->random();
            },

        ];
    }
}
