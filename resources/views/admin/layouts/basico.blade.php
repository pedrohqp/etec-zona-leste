<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Painel Admin - @yield('titulo')</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <style>
        /* Estilos extras para o painel admin */
        .cabecalho-admin {
            background-color: #2c2c2c;
            color: #fff;
            padding: 12px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .cabecalho-admin .titulo-admin {
            font-size: 18px;
            font-weight: bold;
        }
        .cabecalho-admin .titulo-admin span {
            font-size: 13px;
            font-weight: normal;
            color: #aaa;
        }
        .menu-admin {
            background-color: #3d3d3d;
        }
        .menu-admin ul {
            list-style: none;
            display: flex;
            flex-wrap: wrap;
            margin: 0;
            padding: 0;
        }
        .menu-admin ul li a {
            display: block;
            color: #ccc;
            padding: 11px 18px;
            font-size: 14px;
            transition: background-color 0.2s;
        }
        .menu-admin ul li a:hover {
            background-color: #555;
            color: #fff;
        }
    </style>
</head>
<body>

    {{-- Cabeçalho do painel --}}
    <div class="cabecalho-admin">
        <div class="titulo-admin">
            Painel Administrativo
            <span>- Etec Zona Leste</span>
        </div>
        <div>
            Olá, <strong>{{ Auth::user()->name ?? 'Admin' }}</strong>
            &nbsp;|&nbsp;
            <a href="{{ route('admin.sair') }}" style="color: #f88; font-size: 13px;">Sair</a>
        </div>
    </div>

    {{-- Menu do painel --}}
    <nav class="menu-admin">
        <ul>
            <li><a href="{{ route('admin.home') }}">Início</a></li>
            <li><a href="{{ route('admin.curso') }}">Cursos</a></li>
            <li><a href="{{ route('admin.mensagens') }}">Mensagens</a></li>
            <li><a href="{{ route('site.index') }}">Ver Site</a></li>
        </ul>
    </nav>

    {{-- Conteúdo da página --}}
    @yield('conteudo')

</body>
</html>
