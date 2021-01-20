<?php

namespace Database\Factories;

use App\Models\faqs_question;
use Illuminate\Database\Eloquent\Factories\Factory;

class faqs_questionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = faqs_question::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence;
        return [
            'question_value' => $title,
            'language_id' => function (){
                return \App\Models\const_languages::all()->random();
            },
            'user_id' => function (){
                return \App\Models\User::all()->random();
            },
        ];
    }
}
