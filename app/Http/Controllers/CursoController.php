<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    // Exibe a página de busca de cursos
    public function index()
    {
        return view('admin.curso.index');
    }

    // Lista os cursos com filtro de pesquisa
    public function listar(Request $request)
    {
        $cursos = Curso::where('nome', 'like', '%' . $request->input('nome') . '%')
            ->where('area', 'like', '%' . $request->input('area') . '%')
            ->where('turno', 'like', '%' . $request->input('turno') . '%')
            ->paginate(5);

        return view('admin.curso.listar', [
            'cursos'  => $cursos,
            'request' => $request->all(),
        ]);
    }

    // Exibe o formulário de cadastro e processa o envio
    public function adicionar(Request $request)
    {
        $msg = '';

        if ($request->isMethod('post') && $request->input('id') == '') {
            $regras = [
                'nome'    => 'required|min:3|max:100',
                'area'    => 'required',
                'turno'   => 'required',
                'duracao' => 'required',
            ];

            $feedback = [
                'required'  => 'O campo :attribute é obrigatório.',
                'nome.min'  => 'O nome deve ter pelo menos 3 caracteres.',
            ];

            $request->validate($regras, $feedback);

            Curso::create($request->all());
            $msg = 'Curso cadastrado com sucesso!';
        }

        if ($request->isMethod('post') && $request->input('id') != '') {
            $curso = Curso::find($request->input('id'));
            $atualizado = $curso->update($request->all());

            if ($atualizado) {
                $msg = 'Curso atualizado com sucesso!';
            } else {
                $msg = 'Erro ao atualizar o curso.';
            }

            return redirect()->route('admin.curso.editar', ['id' => $request->input('id'), 'msg' => $msg]);
        }

        return view('admin.curso.adicionar', ['msg' => $msg]);
    }

    // Exibe o formulário de edição
    public function editar($id, $msg = '')
    {
        $curso = Curso::find($id);
        return view('admin.curso.adicionar', ['curso' => $curso, 'msg' => $msg]);
    }

    // Exclui um curso
    public function excluir($id)
    {
        $curso = Curso::find($id);
        if ($curso) {
            $curso->delete();
            return redirect()->route('admin.curso.listar')->with('msg', 'Curso excluído com sucesso!');
        }
        return redirect()->route('admin.curso.listar')->with('msg', 'Curso não encontrado.');
    }
}
