<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Videogame;
use App\Models\Genre;
use App\Models\Platform;

class VideogameController extends Controller
{
    // INDEX
    public function index()
    {
        $videogames = Videogame::all();
        // dd($videogames);
        $platforms = Platform::all();

        return view('videogames.index', compact('videogames', 'platforms'));
    }

    // CREATE
    public function create()
    {
        $genres = Genre::all();
        // dd($genres);
        $platforms = Platform::all();
        return view('videogames.create', compact('genres', 'platforms'));
    }

    // STORE
    public function store(Request $request)
    {
        // return dd($request);

        $data = $request->all();
        // dd($data);
            $newVideogame = new Videogame();

            $newVideogame->title = $data['title'];
            $newVideogame->developers = $data['developers'];
            $newVideogame->genre_id = $data['genre_id'];
            $newVideogame->release_date = $data['release_date'];
            $newVideogame->price = $data['price'];
            $newVideogame->description = $data['description'];
            
            // dd($newVideogame);

            if(array_key_exists('image', $data)) {
                dump('immagine esiste');
                $img_game = Storage::putFile('videogame', $data['image']);

                $newVideogame->image = $img_game;
            }


            $newVideogame->save();
           
           if($request->has('platforms')){

            $newVideogame->platforms()->attach($data['platforms']);
        }

           return redirect()->route('videogame.show', $newVideogame);
       
    }

    // SHOW
    public function show(Videogame $videogame)
    {
        // dd($videogame);

        $previousVideogameId = Videogame::where('id', '<', $videogame->id)->max('id');
        $nextVideogameId = Videogame::where('id', '>', $videogame->id)->min('id');

        return view('videogames.show', compact('videogame', 'previousVideogameId', 'nextVideogameId'));
        // dd($videogame->genre);

        
    }

    // EDIT
    public function edit(Videogame $videogame)
    {
        $genres = Genre::all();
        // dd($genres);

        $platforms = Platform::all();
        //dd($platforms);
        
        return view('videogames.edit', compact('videogame','genres', 'platforms'));
    }

    // UPDATE
    public function update(Request $request, Videogame $videogame)
    {
        $data = $request->all();
        // dd($data);

        $videogame->title = $data['title'];
        $videogame->developers = $data['developers'];
        $videogame->genre_id = $data['genre_id'];
        $videogame->release_date = $data['release_date'];
        // $videogame->platform = $data['platform'];
        $videogame->price = $data['price'];
        $videogame->description = $data['description'];


    if ($request->hasFile('image')) {
        
    if ($videogame->image && Storage::exists($videogame->image)) {
        Storage::delete($videogame->image);
    }

    
    $img_game = Storage::putFile('videogame', $request->file('image'));
    $videogame->image = $img_game;

    }

        $videogame->update();

        if($request->has('platforms')){

            $videogame->platforms()->sync($data['platforms']);
        }else {
            $videogame->platforms()->detach();
        }
        

        return redirect()->route('videogame.show', $videogame);
    }

    // DESTROY
    public function destroy(Videogame $videogame)
{
    
    if ($videogame->image && Storage::exists($videogame->image)) {
        Storage::delete($videogame->image);
    }

    
    $videogame->platforms()->detach();

   
    $videogame->delete();

    return redirect()->route('videogame.index');
}
}
