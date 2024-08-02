<?php

namespace Database\Factories;

use App\Models\PortfolioCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Portfolio>
 */
class PortfolioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $images =
            [
                'dummy/img1.jpg',
                'dummy/img2.jpg',
                'dummy/img3.jpg',
                'dummy/img4.jpg',
                'dummy/img5.jpg',
                'dummy/img6.jpg',
            ];
        return [
            // create unique random element image from $images
            'image' => $this->faker->unique()->randomElement($images),
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(3),
            'portfolio_category_id' => PortfolioCategory::factory()->create()->id,
        ];
    }
}
