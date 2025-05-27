<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;
use App\Models\Genre;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = [
            'Avventura',
            'Battle Royale',
            'Costruzione Città',
            'GDR (Gioco di Ruolo)',
            'Gestionale',
            'Horror',
            'Indie',
            'Massa Multigiocatore Online (MMO)',
            'Musicale',
            'Open World',
            'Piattaforma',
            'Picchiaduro',
            'Puzzle',
            'Racing (Corse)',
            'Rhythm',
            'Sparatutto in Prima Persona (FPS)',
            'Sparatutto in Terza Persona (TPS)',
            'Sportivo',
            'Strategia',
            'Survival'
        ];

        foreach ($genres as $genre) {
            $newGenre = new Genre();

            $newGenre->name = $genre;
            $newGenre->slug = Str::slug($genre);

            $newGenre->save();
        }
    }
}
