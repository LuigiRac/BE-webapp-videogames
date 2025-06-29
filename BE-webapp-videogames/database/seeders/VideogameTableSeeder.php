<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Videogame;
use App\Models\Genre;
use App\Models\Platform;
use Illuminate\Support\Str;




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
    
        'release_date' => '2018-04-20', 
    
        'price' => 19.99,
        'description' => 'Un epico viaggio nel mondo della mitologia norrena con Kratos e suo figlio Atreus.',
    ],
    [
        'title' => 'Red Dead Redemption 2',
        'developers' => 'Rockstar Games',
    
        'release_date' => '2018-10-26',
    
        'price' => 29.99,
        'description' => 'Un vasto mondo aperto ambientato nel selvaggio West, con una storia profonda e personaggi memorabili.',
    ],
    [
        'title' => 'Resident Evil 3 Remake',
        'developers' => 'Capcom',
        
        'release_date' => '2020-04-03', 
        
        'price' => 39.99,
        'description' => 'Un terrificante gioco horror in prima persona con elementi di azione e puzzle, rifatto con grafica moderna.',
    ],
    [
        'title' => 'The Legend of Zelda: Tears of the Kingdom',
        'developers' => 'Nintendo EPD',
        
        'release_date' => '2023-05-12', 
        
        'price' => 59.99,
        'description' => 'Il sequel di Breath of the Wild, con nuove abilità e un mondo ancora più vasto da esplorare.',
    ],
    [
        'title' => 'Marvel\'s Spider-Man 2',
        'developers' => 'Insomniac Games',
        
        'release_date' => '2023-10-20', 
        
        'price' => 69.99,
        'description' => 'Il nuovo capitolo delle avventure di Spider-Man, con Peter Parker e Miles Morales che uniscono le forze.',
    ],
    [
        'title' => 'Untitled Goose Game',
        'developers' => 'House House',
        
        'release_date' => '2019-09-20', 
        
        'price' => 14.99,
        'description' => 'Gioca nei panni di un\'oca dispettosa che terrorizza gli abitanti di un pacifico villaggio.',
    ],
];

$genres = Genre::all();

        foreach ($datas as $data) { 
            $randomGenre = $genres->random();
            $newVideogame = new Videogame();
            $newVideogame->title = $data['title'];
            $newVideogame->developers = $data['developers'];
            $newVideogame->genre_id =$randomGenre->id;
            $newVideogame->release_date = $data['release_date'];
            $newVideogame->price = $data['price'];
            $newVideogame->description = $data['description'];
           

           $newVideogame->save();


        }
    }
}
