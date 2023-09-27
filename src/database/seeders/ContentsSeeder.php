<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Study_contents::create(['title' => 'N予備校']);
        \App\Models\Study_contents::create(['title' => 'ドットインストール']);
        \App\Models\Study_contents::create(['title' => 'POSSE課題']);
    }
}
