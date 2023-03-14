<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => $this->faker->text(70),
            "slug" => $this->faker->unique()->text(20),
            "price" => $this->faker->numberBetween($min = 1, $max = 6000),
            "in_sale" => $this->faker->numberBetween($min = 1, $max = 4),
            "content" => $this->faker->paragraph($nbSentences = 8),
            "created_at" => now()->addDay(-rand(0, 45)),
        ];
    }
}
