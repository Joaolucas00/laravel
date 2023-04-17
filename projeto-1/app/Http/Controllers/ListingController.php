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
use Illuminate\Validation\Rule;

class ListingController extends Controller
{

    // Show all listings
    public function index() {
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->get(),
            //'listings' => Listing::all()
        ]);
    }

    // get
    /**
     *  The get method returns an Illuminate\Support\Collection instance containing the results of the query where each result is an instance of the PHP stdClass object
     * 
     */


    // ::latest()
    /** Laravel provides the latest() method to get the last record from the database.
     * 
     *  latest() is a function defined in Illuminate\Database\Query\Builder Class. It's job is very simple. This is how it is defined.
     * 
     * public function latest($column = 'created_at')
     * {
     *      return $this->orderBy($column, 'desc');
     * } 
     * 
     * 
     *  So, It will just orderBy with the column you provide in descending order with the default column will be created_at.
     * 
     */

    // Show single listing
    public function show(Listing $listing) {
        return view('listings.show', [ // Use o ponto (".") caso a view esteja dentro de uma pasta 
            'listing' => $listing
        ]);
    }

    public function create() {
        return view('listings.create');
    }


    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'empresa')],
        ]);
    }

    /** Validação 
     *      
     * 
     *      Documentação
     * 
     *  Laravel provides several different approaches to validate your application's incoming data. 
     * It is most common to use the validate method available on all incoming HTTP requests. 
     * However, we will discuss other approaches to validation as well.
     * 
     * Laravel includes a wide variety of convenient validation rules that you may apply to data, 
     * even providing the ability to validate if values are unique in a given database table. 
     * We'll cover each of these validation rules in detail so that you are familiar with all of Laravel's validation features.
     * 
     * 
     *  Now we are ready to fill in our store method with the logic to validate the new blog post. 
     * To do this, we will use the validate method provided by the Illuminate\Http\Request object. 
     * If the validation rules pass, your code will keep executing normally; 
     * however, if validation fails, an Illuminate\Validation\ValidationException exception will be thrown and the proper error response will automatically be sent back to the user.
     * 
     * 
     * Regras da validação documentadas: https://laravel.com/docs/10.x/validation#available-validation-rules
     * 
     *  regra required
     * 
     * The field under validation must be present in the input data and not empty. 
     * A field is "empty" if it meets one of the following criteria:
     *  The value is null.
     *  The value is an empty string.
     *  The value is an empty array or empty Countable object.
     *  The value is an uploaded file with no path.
     * 
     * unique:table,column
     * 
     * The field under validation must not exist within the given database table.
     */




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
