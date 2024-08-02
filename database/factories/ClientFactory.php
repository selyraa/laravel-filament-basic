<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
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
            'dummy/img1.png',
            'dummy/img2.png',
            'dummy/img3.png',
            'dummy/img4.png',
            'dummy/img5.png',
            'dummy/img6.png',
            'dummy/img7.png',
            'dummy/img8.png',
            'dummy/img9.png',
            'dummy/img10.png',
        ];
        return [
            'image' => $this->faker->randomElement($images),
            'name' => $this->faker->company(),
        ];
    }
}
