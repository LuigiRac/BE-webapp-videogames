<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class VideogamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 10; $i++) { 
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
