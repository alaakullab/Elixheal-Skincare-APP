<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Category;
use App\Models\question;
use App\Models\answer;
use App\Models\const_languages;
use App\Models\contact;
use App\Models\product;
use App\Models\faqs_question;
use App\Models\faqs_answer;
use App\Models\setting;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        const_languages::factory(4)->create();
        Category::factory(5)->create();
        contact::factory(10)->create();
        product::factory(6)->create();
        question::factory(10)->create();
        answer::factory(30)->create();
        faqs_question::factory(30)->create();
        faqs_answer::factory(90)->create();
        setting::factory(4)->create();
    }
}
