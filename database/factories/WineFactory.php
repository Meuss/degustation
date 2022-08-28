<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Enums\Countries;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Wine>
 */
class WineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->sentence(3),
            'cellar' => fake()->words(3, true),
            'region' => fake()->words(1, true),
            'country' => fake()->randomElement(Countries::values()),
            'year' => fake()->numberBetween(1990, 2022),
            'grape_variety' => fake()->words(3, true),
            'description' => fake()->paragraph(2),
        ];
    }
}
