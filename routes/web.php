<?php

use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;
//Route Homepage
Route::get('/', function(){
    return view('homepage');
});
//route /games untuk menampilkan list semua game yang ada di model
//di route ini memanggil fungsi index yang ada di controller "GameController"
Route::get('/games', [GameController::class, 'index']);
//route /game/id untuk menampilkan detail dari game
//di route ini memanggil fungsi show yang ada di controller GameController
Route::get('/game/{id}', [GameController::class, 'show']);
