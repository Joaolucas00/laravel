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
         */
    }
}
