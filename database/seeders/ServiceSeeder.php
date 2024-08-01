<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // add seeder for service
        \App\Models\Service::factory(10)->create();

        \App\Models\Hero::create([
            'image' => 'https://via.placeholder.com/800x600',
            'title' => 'We are a Digital Agency serve#Online Marketing|Web Development|IT Concultant|Social Content',
            'subtitle' => 'We would direct you to limitless ideas and move your brand into a global landscape.',
            'link1' => 'http://localhost:8000/#portfolio',
            'link2' => 'https://github.com/selyraa',
            'is_active' => true,
        ]);
    }
}
