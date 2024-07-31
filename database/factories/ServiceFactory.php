<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // create service factory
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(3),
            'icon' => $this->faker->imageUrl(),
        ];
    }
}
