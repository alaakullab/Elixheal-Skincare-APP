<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $word = $this->faker->name;
        return [
            'name' => $word,
            'slug' => Str::slug($word),
            'language_id' => function(){
                return \App\Models\const_languages::all()->random();
            },
            'user_id' => function () {
                return \App\Models\User::all()->random();
            },
        ];
    }
}
