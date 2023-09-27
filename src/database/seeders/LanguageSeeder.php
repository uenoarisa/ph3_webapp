<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Study_language::create(['title' => 'HTML']);
        \App\Models\Study_language::create(['title' => 'CSS']);
        \App\Models\Study_language::create(['title' => 'PHP']);
        \App\Models\Study_language::create(['title' => 'JavaScript']);
        \App\Models\Study_language::create(['title' => 'SQL']);
        \App\Models\Study_language::create(['title' => 'SHELL']);
        \App\Models\Study_language::create(['title' => '情報システム基礎知識(その他)']);
        \App\Models\Study_language::create(['title' => 'Laravel']);
    }
}
