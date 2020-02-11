<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function create() {
        return view('layouts.auth.login');
    }

    public function authenticate(LoginRequest $request) {
        $credentials = $request->only('email', 'password');
        info($credentials);

        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        }
    }

    public function destroy() {
        Auth::logout();
        return redirect()->route('login');
    }
}
