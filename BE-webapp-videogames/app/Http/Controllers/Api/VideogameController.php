<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Videogame;

class VideogameController extends Controller
{
    public function index(){

        $videogames = Videogame::all();
        // dd($videogames);

        return response()->json(
            [
                'success'=>true,
                'data'=>'tutto funziona bene'
            ]
        );
    }
}
