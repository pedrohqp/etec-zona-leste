<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('site.login');
    }

    public function autenticar(Request $request)
    {
        $credenciais = [
            'email'    => $request->input('email'),
            'password' => $request->input('senha'),
        ];

        if (Auth::attempt($credenciais)) {
            return redirect()->route('admin.home');
        }

        return redirect()->route('site.login')->with('erro', 'E-mail ou senha incorretos.');
    }

    public function sair()
    {
        Auth::logout();
        return redirect()->route('site.index');
    }
}
