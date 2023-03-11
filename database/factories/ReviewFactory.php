<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "rating" => rand($min = 0, $max = 5),
            "is_published" => rand($min = 0, $max = 1),
            "is_visible" => rand($min = 0, $max = 1),
        ];
    }
}
