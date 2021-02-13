<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\const_languages::factory(4)->create();
        \App\Models\Category::factory(5)->create();
        \App\Models\contact::factory(10)->create();
        \App\Models\product::factory(6)->create();
        \App\Models\question::factory(10)->create();
        \App\Models\answer::factory(30)->create();
        \App\Models\faqs_question::factory(30)->create();
        \App\Models\faqs_answer::factory(90)->create();
        \App\Models\setting::factory(4)->create();
    }
}
