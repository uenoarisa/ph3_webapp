<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LanguagePost;
use JetBrains\PhpStorm\Language;

class LanguagePostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LanguagePost::truncate();

        LanguagePost::create([
            'study_hours_post_id' => 1,
            'language_id' => 1,
            'hour' => 2,
        ]);

        LanguagePost::create([
            'study_hours_post_id' => 2,
            'language_id' => 5,
            'hour' => 3,
        ]);

        LanguagePost::create([
            'study_hours_post_id' => 3,
            'language_id' => 7,
            'hour' => 0.5,
        ]);
    }
}
