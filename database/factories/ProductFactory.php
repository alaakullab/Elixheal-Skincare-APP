<?php

namespace Database\Factories;

use App\Models\product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence;
        $word = $this->faker->word;
        $digit = $this->faker->randomDigit;
        $image = $this->faker->imageUrl($width = 200, $height = 200);
        return [
            'product_title' => $title,
            'description' => $word,
            'language_id' => function (){
                return \App\Models\const_languages::all()->random();
            },
            'price' => $digit,
            'image_product' => $image,
            'qyt' => $this->faker->numberBetween($min = 0, $max = 200),
            'category_id' => function (){
                return \App\Models\Category::all()->random();
            },
            'user_id' => function () {
                return \App\Models\User::all()->random();
            },
        ];
    }
}
