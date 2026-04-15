<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mensagem;

class ContatoController extends Controller
{
    public function index()
    {
        return view('site.contato');
    }

    public function salvar(Request $request)
    {
        $regras = [
            'nome'     => 'required|min:3|max:80',
            'email'    => 'required|email',
            'assunto'  => 'required|min:3|max:100',
            'mensagem' => 'required|min:10',
        ];

        $feedback = [
            'required'         => 'O campo :attribute é obrigatório.',
            'nome.min'         => 'O nome deve ter pelo menos 3 caracteres.',
            'assunto.min'      => 'O assunto deve ter pelo menos 3 caracteres.',
            'mensagem.min'     => 'A mensagem deve ter pelo menos 10 caracteres.',
            'email.email'      => 'Informe um e-mail válido.',
        ];

        $request->validate($regras, $feedback);

        Mensagem::create($request->all());

        return redirect()->route('site.contato')->with('sucesso', 'Mensagem enviada com sucesso! Entraremos em contato em breve.');
    }
}
