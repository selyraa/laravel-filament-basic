<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PortfolioCategory>
 */
class PortfolioCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // add factory for portfolio category
            'name' => $this->faker->sentence(2),
            'slug' => $this->faker->unique()->slug,
        ];
    }
}
