<?php

namespace Database\Factories;

use App\Models\faqs_answers;
use Illuminate\Database\Eloquent\Factories\Factory;

class faqs_answersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = faqs_answers::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $word = $this->faker->word;
        return [
            'answers_value' => $word,
            'faqs_question_id' => function (){
                return \App\Models\faqs_question::all()->random();
            },
            'user_id' => function (){
                return \App\Models\User::all()->random();
            },
        ];
    }
}
