<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Rotas do Site (área pública)
|--------------------------------------------------------------------------
*/

// Página inicial
Route::get('/', 'App\Http\Controllers\PrincipalController@index')->name('site.index');

// Sobre a escola
Route::get('/sobre', 'App\Http\Controllers\SobreController@index')->name('site.sobre');

// Contato
Route::get('/contato', 'App\Http\Controllers\ContatoController@index')->name('site.contato');
Route::post('/contato', 'App\Http\Controllers\ContatoController@salvar')->name('site.contato.salvar');

// Login
Route::get('/login', 'App\Http\Controllers\LoginController@index')->name('site.login');
Route::post('/login', 'App\Http\Controllers\LoginController@autenticar')->name('site.login.autenticar');

/*
|--------------------------------------------------------------------------
| Rotas da Área Administrativa (protegidas por autenticação)
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->prefix('/admin')->group(function () {

    // Home do painel
    Route::get('/home', 'App\Http\Controllers\AdminController@index')->name('admin.home');

    // Sair
    Route::get('/sair', 'App\Http\Controllers\LoginController@sair')->name('admin.sair');

    // CRUD de Cursos
    Route::get('/cursos', 'App\Http\Controllers\CursoController@index')->name('admin.curso');
    Route::get('/cursos/listar', 'App\Http\Controllers\CursoController@listar')->name('admin.curso.listar');
    Route::post('/cursos/listar', 'App\Http\Controllers\CursoController@listar')->name('admin.curso.listar');
    Route::get('/cursos/adicionar', 'App\Http\Controllers\CursoController@adicionar')->name('admin.curso.adicionar');
    Route::post('/cursos/adicionar', 'App\Http\Controllers\CursoController@adicionar')->name('admin.curso.adicionar');
    Route::get('/cursos/editar/{id}/{msg?}', 'App\Http\Controllers\CursoController@editar')->name('admin.curso.editar');
    Route::get('/cursos/excluir/{id}', 'App\Http\Controllers\CursoController@excluir')->name('admin.curso.excluir');

    // Mensagens de contato
    Route::get('/mensagens', function () {
        $mensagens = \App\Models\Mensagem::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.mensagens', ['mensagens' => $mensagens]);
    })->name('admin.mensagens');
});

/*
|--------------------------------------------------------------------------
| Rota de fallback (página não encontrada)
|--------------------------------------------------------------------------
*/

Route::fallback(function () {
    return redirect()->route('site.index');
});
