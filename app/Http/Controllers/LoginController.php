<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loginForm() {
        return view('auth.login');
    }

    public function login(Request $request) {
        $credenciales = $request->only('email', 'password');
        if (Auth::attempt($credenciales)) {
            return redirect()->intended(route('tienda.index'));
        } else {
            $error = 'Usuario incorrecto';
            return view('auth.login', compact('error'));
        }
    }
    
    public function logout() {
        Auth::logout();
        return redirect('/');
    }

}
