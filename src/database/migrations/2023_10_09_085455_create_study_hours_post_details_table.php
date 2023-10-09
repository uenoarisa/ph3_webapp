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
        Schema::create('study_hours_post_details', function (Blueprint $table) {
            $table->id();
            $table->integer('study_hours_post_id');
            $table->integer('language_posts_id');
            $table->integer('content_posts_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('study_hours_post_details');
    }
};
