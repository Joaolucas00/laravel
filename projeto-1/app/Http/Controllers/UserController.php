<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function register() {
        return view('users.register');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);


        $formFields['password'] = bcrypt($formFields['password']);
        $user = User::create($formFields);
        auth()->login($user);
        return redirect('/')->with('message', 'User created and logged in!');
        /** 
         * auth() - Get the available auth instance
         * 
         * login() - Log a user into the application
         * 
         */
    }

    public function logout (Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out!');

        /**
         *  session() - Get the session associated with the request
         *  
         *  invalidate() - Flush the session data and regenerate the ID 
         * Session invalidation means session destroying.So if session is destroyed,
         * it indicates that server cant identify the client which has visited in previous.
         * So now it creates a new session id for that client.
         *  
         *  regenerateToken() - Regenerate the CSRF token value
         * 
         *  Documentação
         *  In addition to calling the logout method, 
         * it is recommended that you invalidate the user's session and regenerate their CSRF token.
         * 
         * with() - Flash a piece of data to the session, return $this, 
         * param string|array $key
         * param mixed $value
         */
    }

    public function login () {
        return view('users.login');
    }

    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required',
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();
            return redirect('/')->with('message', 'You are now logged in!');
        } else {
            return redirect('/user/authenticate')->with('message', 'Não faz merda!');
        }
        return redirect('/');

        /**
         *  attempt() - Attempt to authenticate a user the given credentials, return bool
         * The attempt method accepts an array of key / value pairs as its first argument. 
         * The values in the array will be used to find the user in your database table
         * 
         * regenerate - Generate a new session identifier, return bool
         * 
         * 
         * 
         * In PHP by default, all sessions are files that are stored in a tmp directory which if you analyze the session.
         * save_path value in php.ini file, you will see where it is. 
         * These files include the serialized session data that you access using $_SESSION keyword.
         * 
         * Laravel utilize basically the original session file store but acts a little bit different. 
         * Beside changing the directory they are saved, 
         * when you call the regenerate function it creates another session file and deletes the old one.
         *  You can see it the implementation Illuminate\Session\Store.php. 
         * The migrate function is used to delete the session and return new session id.
         * 
         */
    }
}
