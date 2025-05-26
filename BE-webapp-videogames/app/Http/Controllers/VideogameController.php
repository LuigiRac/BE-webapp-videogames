<?php

namespace App\Http\Controllers;

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
        //
    }

    // STORE
    public function store(Request $request)
    {
        //
    }

    // SHOW
    public function show(string $id)
    {
        //
    }

    // EDIT
    public function edit(string $id)
    {
        //
    }

    // UPDATE
    public function update(Request $request, string $id)
    {
        //
    }

    // DESTROY
    public function destroy(string $id)
    {
        //
    }
}
