<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('listings', [
        'heading' => 'latest Listings', 
        'listings' => Listing::all(),
    ]);
});

Route::get('/listing/{id}', function ($id) {
    return view('listing', [
        'listing' => Listing::find($id)
    ]);
});

Route::get('/tailwind', function () {
    return view('tailwind');
});


/** Comando do php artisan
 *    make:
 *  php artisan make:model AlgumaCoisa
 *  php artisan make:migration create_algumas_table
 *  php artisan make:factory NomeFactory
 * 
 *    migrate:
 *  php artisan migrate
 *  php artisan migrate:refresh
 *  php artisan migrate:refresh --seed
 * 
 *    db:
 *  php artisan db:seed
 *  
 *  
 **/ 












/*
Route::get('/musicas/{id}', function($id) {
    $musica = Listing::find($id);
    return response('Musica:' . $musica['titulo']);
})->where('id', '[0-9]+');
*/
/*
Route::get('/ola', function() {
    return response('<h1>Ola Mundo</h1>', 200)
    ->header('Content-Type', 'text/plain')
    ->header('dado', 'valor'); 
});

  id na url
Route::get('/post/{id}', function($id) {
    dd($id);
    return response('Post ' . $id);
})->where('id', '[0-9]+'); <- ReGX

Route::get('/search', function(Request $request) {
    return $request->nome . '' . $request->idade; Pegando valores na url
});

Route::get('/', function () {

    $nome = "Lucas";

    $idade = 19;

    $array = [1, 2, 3, 4, 5];

    $nomes = ["João", "Lucas", "Pedro", "Luan"];

    return view('welcome', [
        'nome' => $nome,
        'idade' => $idade,
        'array' => $array,
        'pessoas'=> $nomes,
    ]);
});


*/