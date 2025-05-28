<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Platform;

class PlatformsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $platforms = [
    [
        'name' => 'Game Boy',
        'color' => '#C4C4C4' // Grigio
    ],
    [
        'name' => 'Game Boy Advance',
        'color' => '#8C8C8C' // Grigio più scuro
    ],
    [
        'name' => 'GameCube',
        'color' => '#663399' // Viola
    ],
    [
        'name' => 'Nintendo 3DS',
        'color' => '#D22B2B' // Rosso
    ],
    [
        'name' => 'Nintendo 64',
        'color' => '#8B0000' // Rosso scuro
    ],
    [
        'name' => 'Nintendo DS',
        'color' => '#A9A9A9' // Grigio medio
    ],
    [
        'name' => 'Nintendo Switch',
        'color' => '#E60012' // Rosso brillante
    ],
    [
        'name' => 'PlayStation',
        'color' => '#003791' // Blu scuro
    ],
    [
        'name' => 'PlayStation 2',
        'color' => '#000000' // Nero
    ],
    [
        'name' => 'PlayStation 3',
        'color' => '#696969' // Grigio scuro
    ],
    [
        'name' => 'PlayStation 4',
        'color' => '#0070CD' // Blu
    ],
    [
        'name' => 'PlayStation 5',
        'color' => '#B1D4E0' // Blu chiaro/Bianco
    ],
    [
        'name' => 'Sega Dreamcast',
        'color' => '#FFFFFF' // Bianco
    ],
    [
        'name' => 'Sega Mega Drive',
        'color' => '#000000' // Nero
    ],
    [
        'name' => 'Super Nintendo',
        'color' => '#C0C0C0' // Argento
    ],
    [
        'name' => 'Wii',
        'color' => '#FFFFFF' // Bianco
    ],
    [
        'name' => 'Wii U',
        'color' => '#009ACD' // Azzurro
    ],
    [
        'name' => 'Xbox',
        'color' => '#52B043' // Verde
    ],
    [
        'name' => 'Xbox 360',
        'color' => '#9ACD32' // Verde chiaro
    ],
    [
        'name' => 'Xbox One',
        'color' => '#107C10' // Verde scuro
    ],
    [
        'name' => 'Xbox Series X',
        'color' => '#107C10' // Verde scuro
    ]
];

foreach ($platforms as $platform) { 
        $newPlatform = new Platform();

        $newPlatform->name = $platform['name'];
        $newPlatform->color = $platform['color'];
            
        $newPlatform->save();
        }
    }
}
