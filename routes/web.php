<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PokemonController; // MANCAVA QUESTO

// Rotta home
Route::get('/', function () {
    return view('welcome');
})->name('home.page');

// Rotta storia pokemon protetta da auth
Route::post('/pokemon/history', [PokemonController::class, 'pokemon'])->name('pokemon.history')->middleware('auth');




