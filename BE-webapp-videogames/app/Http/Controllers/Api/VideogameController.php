<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Videogame;

class VideogameController extends Controller
{
    public function index(){

        $videogames = Videogame::with('genre', 'platforms')->get();
        // dd($videogames);

        return response()->json(
            [
                'success'=>true,
                'data'=>$videogames
            ]
        );
    }

    public function show(Videogame $videogame){

        $videogame->load('genre', 'platforms');
        // dd($videogame);

        return response()->json(
            [
                'success'=>true,
                'data'=>$videogame
            ]
        );
    }
}
