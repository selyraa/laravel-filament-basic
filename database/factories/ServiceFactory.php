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
        // create array for svg icons from storage/dummy
        $icons = [
            'dummy/people.svg',
            'dummy/brand.svg',
            'dummy/creative.svg',
            'dummy/seo.svg',
            'dummy/social.svg',
            'dummy/teamwork.svg',
        ];

        return [
            //create factory for service table
            // generate randomElement for icon from icons array
            'icon' => $this->faker->unique()->randomElement($icons),
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(3),
        ];
    }
}
