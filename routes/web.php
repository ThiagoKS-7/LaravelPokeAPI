<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\PokemonController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/pokemons', function () {
//     return Http::get('https://pokeapi.co/api/v2/pokemon?limit=100&offset=200');
// });
Route::get('/pokemons', [PokemonController::class, 'showList']);

Route::get('/pokemon/{name}', [PokemonController::class, 'showByName']);
// Route::get('/pokemon/{name}', function (String $name) {
//     return Http::get('https://pokeapi.co/api/v2/pokemon/' . $name);
// });