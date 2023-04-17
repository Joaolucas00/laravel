<?php

use App\Http\Controllers\ListingController;
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

// Com controller podemos fazer diferente
/*
Route::get('/', function () {
    return view('listings', [
        'heading' => 'latest Listings', 
        'listings' => Listing::all(),
    ]);
});
*/

// Com controller

Route::get('/', [ListingController::class, 'index']);

/** ::class 
 * 
 *  SomeClass::class will return the fully qualified name of SomeClass including the namespace. This feature was implemented in PHP 5.5.
 *  class is special, which is provided by php to get the fully qualified class name.
 * 
 *  use \App\Console\Commands\Inspire;
 * protected $commands = [
 *      Inspire::class, // Equivalent to "App\Console\Commands\Inspire"
 * ];
 * 
 * 
 */





/** Route Model Binding
 *  Documentação
 * Ao injetar um model ID em uma rota ou ação do controller, você frequentemente consultará o banco de dados para recuperar o modelo que corresponde a esse ID. 
 * Laravel route model binding fornece uma maneira conveniente de injetar automaticamente as instâncias do modelo diretamente em suas rotas. 
 * Por exemplo, em vez de injetar o ID de um usuário, você pode injetar toda a instância do modelo User que corresponda ao ID fornecido.
 * 
 * 
 * Since the $user variable is type-hinted as the App\Models\User Eloquent model and the variable name matches the {user} URI segment, 
 * Laravel will automatically inject the model instance that has an ID matching the corresponding value from the request URI. 
 * If a matching model instance is not found in the database, a 404 HTTP response will automatically be generated.
 * 
 * 
 *  Exemplo:
 */


Route::get('/listing/{listing}', [ListingController::class, 'show']);

 /* 
Route::get('/listing/{listing}', function (Listing $listing) {
    return view('listing', [
        'listing' => $listing
    ]);
}); 

*/

Route::get('/listings/create', [ListingController::class, 'create']);

Route::post('/listings', [ListingController::class, 'store']);

 /*
Route::get('/listing/{id}', function ($id) {
    return view('listing', [
        'listing' => Listing::find($id)
    ]);
});
*/




Route::get('/tailwind', function () {
    return view('tailwind');
});




/** Comando do php artisan
 *    make:
 *  php artisan make:model AlgumaCoisa
 *  php artisan make:migration create_algumas_table
 *  php artisan make:factory NomeFactory
 *  php artisan make:controller NomeController
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

 /**
  *  O método find retorna o modelo que possui uma chave primária correspondente à chave fornecida
  */


// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing  








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