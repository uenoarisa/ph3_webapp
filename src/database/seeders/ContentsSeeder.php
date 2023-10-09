<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Content;

class ContentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Content::truncate();
        // 一旦データベースのテーブルの全てのデータを削除し、オートインクリメントのIDをリセットする

        Content::create([
            'content' => 'ドットインストール',
            'color_code' => '#A3E0FF',
        ]);
        Content::create([
            'content' => 'N予備校',
            'color_code' => '#72CDFA',
        ]);
        Content::create([
            'content' => 'POSSE課題',
            'color_code' => '#3184AD',
        ]);
    }
}
