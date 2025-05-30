<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\VideogameController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

//INDEX
Route::get('videogames', [VideogameController::class, 'index']);

//SHOW
Route::get('videogames/{videogame}', [VideogameController::class, 'show']);