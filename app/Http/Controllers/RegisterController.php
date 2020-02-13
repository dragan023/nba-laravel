<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Http\Requests\RegisterRequest;
use \App\User;

class RegisterController extends Controller
{
    public function __construct() {
        $this->middleware('checkGuest');
    }

    public function create() {
        return view('layouts.auth.register');
    }

    public function store(RegisterRequest $request) {
        $newUser = $request->all();
        $newUser['password'] = bcrypt($request->get('password'));
        $user = User::create($newUser);
        auth()->login($user);
        
        return redirect()->route('home');
    }
}
