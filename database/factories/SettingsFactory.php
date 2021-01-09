<?php

namespace Database\Factories;

use App\Models\settings;
use Illuminate\Database\Eloquent\Factories\Factory;

class SettingsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = settings::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence;
        $word = $this->faker->word;
        $text = $this->faker->text;
        $logo = $this->faker->imageUrl($width = 250, $height = 100);
        $icon = $this->faker->imageUrl($width = 16, $height = 16);
        $meta_keyword = $this->faker->unique()->sentence.' '.mt_rand(0,1000);

        return [
            'site_name' => $title,
            'site_desc' =>  $text,
            'logo' =>  $logo,
            'icon' =>  $icon,
            'copyright' =>  '2021 © Elixheal.',
            'email' =>  $this->faker->unique()->companyEmail,
            'meta_keyword' =>  strtolower(str_replace(' ', ', ', $meta_keyword)),
            'meta_robots' =>  strtolower(str_replace(' ', ', ', $meta_keyword)),
            'Maintenance_message' =>  $word,
            'phone' =>  $this->faker->phoneNumber,
            'maintenance_status' =>  'open',
            'facebook' =>  $this->faker->url,
            'twitter' =>  $this->faker->url,
            'instagram' =>  $this->faker->url,
            'language_id' => function (){
                return \App\Models\const_languages::all()->random();
            },
            'user_id' => function (){
                return \App\Models\User::all()->random();
            },

        ];
    }
}
