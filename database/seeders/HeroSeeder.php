<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //add seeder for hero
        \App\Models\Hero::factory(10)->create();
        \App\Models\Hero::factory()->create([
            'is_active' => true
        ]);
    }

    // create one hero

}
