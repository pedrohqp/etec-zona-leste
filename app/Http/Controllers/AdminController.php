<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\Mensagem;

class AdminController extends Controller
{
    public function index()
    {
        $totalCursos    = Curso::count();
        $totalMensagens = Mensagem::count();

        return view('admin.home', [
            'totalCursos'    => $totalCursos,
            'totalMensagens' => $totalMensagens,
        ]);
    }
}
