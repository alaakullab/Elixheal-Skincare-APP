<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->name;
        $text = $this->faker->text;
        return [
            'full_name' => $name,
            'email_contacts' =>  $this->faker->unique()->safeEmail,
            'phone' =>  $this->faker->phoneNumber,
            'message' =>  $text,
            'language_id' => function () {
                return \App\Models\const_languages::all()->random();
            },
        ];
    }
}
