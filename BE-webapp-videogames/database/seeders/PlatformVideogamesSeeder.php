<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Videogame;
use App\Models\Platform;

class PlatformVideogamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $platforms = Platform::all();
        $videogames= Videogame::all();

        foreach ($videogames as $videogame) {

            $randomPlatforms = $platforms->random(2);

            $videogame->platforms()->attach($randomPlatforms);
        }
        
    }
}
