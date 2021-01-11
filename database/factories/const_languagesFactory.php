<?php

namespace Database\Factories;

use App\Models\const_languages;
use Illuminate\Database\Eloquent\Factories\Factory;

class const_languagesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = const_languages::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'name' => 'English-'. $this->faker->unique()->numberBetween(1,4),
            'code' => $this->faker->languageCode,
        ];

    }
}
