<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_mids', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('language_id');
            $table->unsignedBigInteger('content_id');

            // 他のカラムを追加
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('language_id')->references('id')->on('study_languages')->onDelete('cascade');
            $table->foreign('content_id')->references('id')->on('study_contents')->onDelete('cascade');
            });
            // onDelete('cascade') を使用すると、users テーブルの特定のユーザーが削除されると、関連する 中間テーブル内のそのユーザーに関連するレコードも自動的に削除される
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_mids');
    }
};
