<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Videogame;


class VideogameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


     $datas = [
    [
        'title' => 'God of War',
        'developers' => 'Santa Monica Studio',
        'genre' => 'Action-adventure', 
        'release_date' => '2018-04-20', 
        'platform' => 'PlayStation 4',
        'price' => 19.99,
        'description' => 'Un epico viaggio nel mondo della mitologia norrena con Kratos e suo figlio Atreus.',
    ],
    [
        'title' => 'Red Dead Redemption 2',
        'developers' => 'Rockstar Games',
        'genre' => 'Action-adventure', 
        'release_date' => '2018-10-26',
        'platform' => 'Multi-platform',
        'price' => 29.99,
        'description' => 'Un vasto mondo aperto ambientato nel selvaggio West, con una storia profonda e personaggi memorabili.',
    ],
    [
        'title' => 'Resident Evil 3 Remake',
        'developers' => 'Capcom',
        'genre' => 'Survival Horror', 
        'release_date' => '2020-04-03', 
        'platform' => 'Multi-platform',
        'price' => 39.99,
        'description' => 'Un terrificante gioco horror in prima persona con elementi di azione e puzzle, rifatto con grafica moderna.',
    ],
    [
        'title' => 'The Legend of Zelda: Tears of the Kingdom',
        'developers' => 'Nintendo EPD',
        'genre' => 'Action-adventure', 
        'release_date' => '2023-05-12', 
        'platform' => 'Nintendo Switch',
        'price' => 59.99,
        'description' => 'Il sequel di Breath of the Wild, con nuove abilità e un mondo ancora più vasto da esplorare.',
    ],
    [
        'title' => 'Marvel\'s Spider-Man 2',
        'developers' => 'Insomniac Games',
        'genre' => 'Action-adventure', 
        'release_date' => '2023-10-20', 
        'platform' => 'PlayStation 5',
        'price' => 69.99,
        'description' => 'Il nuovo capitolo delle avventure di Spider-Man, con Peter Parker e Miles Morales che uniscono le forze.',
    ],
    [
        'title' => 'Untitled Goose Game',
        'developers' => 'House House',
        'genre' => 'Puzzle, Stealth', 
        'release_date' => '2019-09-20', 
        'platform' => 'Multi-platform',
        'price' => 14.99,
        'description' => 'Gioca nei panni di un\'oca dispettosa che terrorizza gli abitanti di un pacifico villaggio.',
    ],
];


        foreach ($datas as $data) { 
            $newVideogame = new Videogame();

            $newVideogame->title = $data['title'];
            $newVideogame->developers = $data['developers'];
            
            $newVideogame->release_date = $data['release_date'];
            $newVideogame->platform = $data['platform'];
            $newVideogame->price = $data['price'];
            $newVideogame->description = $data['description'];
           

           $newVideogame->save();


        }
    }
}
