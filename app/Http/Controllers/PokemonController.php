<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PokemonController extends Controller
{
    // Metodo per mostrare la pagina "pokemon.history"
    public function pokemon()
    {
        return view('pokemon.history');
    }

}


