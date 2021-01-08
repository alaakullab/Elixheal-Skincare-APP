<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\categories;
use App\Models\questions;
use App\Models\answers;
use App\Models\const_languages;
use App\Models\contacts;
use App\Models\products;
use App\Models\faqs_questions;
use App\Models\faqs_answers;

use Illuminate\Database\Seeder;

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
        categories::factory(5)->create();
        contacts::factory(10)->create();
        products::factory(6)->create();
        questions::factory(10)->create();
        answers::factory(30)->create();
        faqs_questions::factory(30)->create();
        faqs_answers::factory(90)->create();
    }
}
