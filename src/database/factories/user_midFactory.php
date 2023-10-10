<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\user_mid>
 */
class user_midFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'user_id' => \App\Models\User::factory(),
            'language_id' => \App\Models\Study_language::factory(),
            'content_id' => \App\Models\Study_contents::factory(),
            'time' => $this->faker->randomNumber(2), // 仮のダミー値

        ];
    }
}

