<?php
/** controller
 * 
 *  O Laravel Controller é onde manipulamos a lógica de tratamento das requisições recebendo os dados do model e transmitindo-os para a view. 
 * É ele que abstrairá toda a complexidade da rota que, 
 * como já diz o nome, 
 * apenas roteará a Request feita para sua devida lógica.
 * 
 */


namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{

    // Show all listings
    public function index() {
        return view('listings.index', [
            'listings' => Listing::all()
        ]);
    }

    // Show single listing
    public function show(Listing $listing) {
        return view('listings.show', [ // Use o ponto (".") caso a view esteja dentro de uma pasta 
            'listing' => $listing
        ]);
    }
}

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
 */
