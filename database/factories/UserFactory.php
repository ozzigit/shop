<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => $this->faker->name(),
            // "name" => fake()->name(),
            // "email" => fake() ->unique() ->safeEmail(),
            "email" => $this->faker->unique()->safeEmail(),
            "email_verified_at" => now(),
            "password" =>
                '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            "remember_token" => Str::random(10),
            "first_name" => $this->faker->firstName(),
            "middle_name" => $this->faker->firstName(), // no time to setup locales
            "last_name" => $this->faker->lastName(),
            "created_at" => now()->addDay(-rand(0, 30)),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(
            fn(array $attributes) => [
                "email_verified_at" => null,
            ]
        );
    }
}
