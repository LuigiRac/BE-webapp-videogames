<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Videogame;
use App\Models\Genre;

class VideogameController extends Controller
{
    // INDEX
    public function index()
    {
        $videogames = Videogame::All();
        // dd($videogames);

        return view('videogames.index', compact('videogames'));
    }

    // CREATE
    public function create()
    {
        $genres = genre::all();
        // dd($genres);
        return view('videogames.create', compact('genres'));
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
            $newVideogame->platform = $data['platform'];
            $newVideogame->price = $data['price'];
            $newVideogame->description = $data['description'];
            
            // dd($newVideogame);

           $newVideogame->save();

           return redirect()->route('videogame.show', $newVideogame);
       
    }

    // SHOW
    public function show(Videogame $videogame)
    {
        // dd($videogame);
        return view('videogames.show', compact('videogame'));
        // dd($videogame->genre);
    }

    // EDIT
    public function edit(Videogame $videogame)
    {
        $genres = genre::all();
        // dd($genres);
        return view('videogames.edit', compact('videogame','genres'));
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
        $videogame->platform = $data['platform'];
        $videogame->price = $data['price'];
        $videogame->description = $data['description'];

        $videogame->update();

        return redirect()->route('videogame.show', $videogame);
    }

    // DESTROY
    public function destroy(Videogame $videogame)
    {
        $videogame->delete();

        return redirect()->route('videogame.index');
    }
}
