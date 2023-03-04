<?php
 
namespace App\Http\Controllers;
 
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Support\Facades\Http;
 
class PokemonController extends Controller
{
    /**
     * Show the pokemons list.
     */
    public function showList(): View
    {
        return view('pokemons', [
            'data' => Http::get('https://pokeapi.co/api/v2/pokemon?limit=9999')
        ]);
    }

    /**
     * Show pokemons by name.
     */
    public function showByName(String $name): View
    {
        return view('pokemonByName', [
            'name'=> $name,
            'data' => Http::get('https://pokeapi.co/api/v2/pokemon/'.$name)
        ]);
    }
}

