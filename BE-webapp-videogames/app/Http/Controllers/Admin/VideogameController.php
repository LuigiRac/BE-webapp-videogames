<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Videogame;

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
        return view('videogames.create');
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
            $newVideogame->genre = $data['genre'];
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
    }

    // EDIT
    public function edit(Videogame $videogame)
    {
        return view('videogames.edit', compact('videogame'));
    }

    // UPDATE
    public function update(Request $request, Videogame $videogame)
    {
        $data = $request->all();
        // dd($data);

        $videogame->title = $data['title'];
        $videogame->developers = $data['developers'];
        $videogame->genre = $data['genre'];
        $videogame->release_date = $data['release_date'];
        $videogame->platform = $data['platform'];
        $videogame->price = $data['price'];
        $videogame->description = $data['description'];

        $videogame->update();

        return redirect()->route('videogame.show', $videogame);
    }

    // DESTROY
    public function destroy(string $id)
    {
        //
    }
}
