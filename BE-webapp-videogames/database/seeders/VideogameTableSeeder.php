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
        'author' => 'Santa Monica Studio',
        'category' => 'Action-adventure',
        'console' => 'PlayStation 4',
        'price' => 19.99,
        'description' => 'Un epico viaggio nel mondo della mitologia norrena con Kratos e suo figlio Atreus.',
    ],
    [
        'title' => 'Red Dead Redemption 2',
        'author' => 'Rockstar Games',
        'category' => 'Action-adventure',
        'console' => 'Multi-platform',
        'price' => 29.99,
        'description' => 'Un vasto mondo aperto ambientato nel selvaggio West, con una storia profonda e personaggi memorabili.',
    ],
    [
        'title' => 'Resident Evil 3 Remake',
        'author' => 'Capcom',
        'category' => 'Survival Horror',
        'console' => 'Multi-platform',
        'price' => 39.99,
        'description' => 'Un terrificante gioco horror in prima persona con elementi di azione e puzzle, rifatto con grafica moderna.',
    ],
    [
        'title' => 'The Legend of Zelda: Tears of the Kingdom',
        'author' => 'Nintendo EPD',
        'category' => 'Action-adventure',
        'console' => 'Nintendo Switch',
        'price' => 59.99,
        'description' => 'Il sequel di Breath of the Wild, con nuove abilità e un mondo ancora più vasto da esplorare.',
    ],
    [
        'title' => 'Marvel\'s Spider-Man 2', 
        'author' => 'Insomniac Games',
        'category' => 'Action-adventure',
        'console' => 'PlayStation 5', 
        'price' => 69.99, 
        'description' => 'Il nuovo capitolo delle avventure di Spider-Man, con Peter Parker e Miles Morales che uniscono le forze.',
    ],
    [
        'title' => 'Untitled Goose Game',
        'author' => 'House House',
        'category' => 'Puzzle, Stealth',
        'console' => 'Multi-platform',
        'price' => 14.99,
        'description' => 'Gioca nei panni di un\'oca dispettosa che terrorizza gli abitanti di un pacifico villaggio.',
    ],
];
        foreach ($datas as $data) { 
            $newVideogame = new Videogame();

            $newVideogame->title = $data['title'];
            $newVideogame->author = $data['author'];
            $newVideogame->category = $data['category'];
            $newVideogame->console = $data['console'];
            $newVideogame->price = $data['price'];
            $newVideogame->description = $data['description'];
           

           $newVideogame->save();


        }
    }
}
