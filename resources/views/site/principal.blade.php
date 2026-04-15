@extends('site.layouts.basico')

@section('titulo', 'Início')

@section('conteudo')

    {{-- Banner principal --}}
    <div class="banner">
        <h1>Bem-vindo à Etec Zona Leste</h1>
        <p>Oferecemos cursos técnicos gratuitos para formar profissionais qualificados.</p>
        <a href="{{ route('site.sobre') }}" class="btn-banner">Conheça a Escola</a>
    </div>

    {{-- Conteúdo principal --}}
    <div class="conteudo-principal">

        {{-- Seção de cursos em destaque --}}
        <h2 class="secao-titulo">Nossos Cursos</h2>
        <div class="grade-cursos">
            <div class="card-curso">
                <h3>Técnico em Informática</h3>
                <p>Área: Tecnologia</p>
                <p>Turno: Manhã / Noite</p>
            </div>
            <div class="card-curso">
                <h3>Técnico em Administração</h3>
                <p>Área: Negócios</p>
                <p>Turno: Tarde / Noite</p>
            </div>
            <div class="card-curso">
                <h3>Técnico em Contabilidade</h3>
                <p>Área: Negócios</p>
                <p>Turno: Noite</p>
            </div>
            <div class="card-curso">
                <h3>Técnico em Logística</h3>
                <p>Área: Negócios</p>
                <p>Turno: Manhã</p>
            </div>
            <div class="card-curso">
                <h3>Técnico em Saúde Bucal</h3>
                <p>Área: Saúde</p>
                <p>Turno: Tarde</p>
            </div>
        </div>

        {{-- Seção sobre a escola --}}
        <h2 class="secao-titulo">Sobre a Escola</h2>
        <div class="secao-sobre">
            <p>
                A <strong>Etec  Zona Leste</strong> oferece cursos técnicos gratuitos com o objetivo de
                formar profissionais qualificados para o mercado de trabalho, proporcionando base
                teórica e prática em diversas áreas do conhecimento.
            </p>
            <p>
                Contamos com infraestrutura moderna, laboratórios equipados e professores
                experientes, prontos para preparar você para os desafios da carreira.
            </p>
            <br>
            <a href="{{ route('site.sobre') }}" class="btn btn-vermelho">Saiba mais</a>
        </div>

        {{-- Seção de contato rápido --}}
        <h2 class="secao-titulo">Entre em Contato</h2>
        <div class="secao-sobre">
            <p>Tem alguma dúvida? Envie uma mensagem para nossa equipe.</p>
            <br>
            <a href="{{ route('site.contato') }}" class="btn btn-vermelho">Fale Conosco</a>
        </div>

    </div>

@endsection
