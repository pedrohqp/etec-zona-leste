@extends('admin.layouts.basico')

@section('titulo', 'Início')

@section('conteudo')

    <div class="pagina-conteudo">

        <div class="titulo-pagina">Painel de Controle</div>
        <div class="caixa-conteudo">

            <p style="margin-bottom: 20px;">Bem-vindo ao painel administrativo da Etec  Zona Leste.</p>

            {{-- Cards de resumo --}}
            <div class="grade-resumo">
                <div class="card-resumo">
                    <div class="numero">{{ $totalCursos }}</div>
                    <div class="descricao">Cursos cadastrados</div>
                </div>
                <div class="card-resumo">
                    <div class="numero">{{ $totalMensagens }}</div>
                    <div class="descricao">Mensagens recebidas</div>
                </div>
            </div>

            {{-- Atalhos --}}
            <h3 style="margin-bottom: 15px; color: #555;">Atalhos rápidos</h3>
            <a href="{{ route('admin.curso.adicionar') }}" class="btn btn-vermelho">Adicionar Curso</a>
            &nbsp;
            <a href="{{ route('admin.curso.listar') }}" class="btn btn-cinza">Listar Cursos</a>
            &nbsp;
            <a href="{{ route('admin.mensagens') }}" class="btn btn-cinza">Ver Mensagens</a>

        </div>

    </div>

@endsection
