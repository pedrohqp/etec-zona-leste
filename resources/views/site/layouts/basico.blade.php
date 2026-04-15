<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Etec Escola Técnica - @yield('titulo')</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
</head>
<body>

    {{-- Cabeçalho com logo e nome da escola --}}
    @include('site.layouts._partials.topo')

    {{-- Conteúdo da página --}}
    @yield('conteudo')

    {{-- Rodapé --}}
    @include('site.layouts._partials.rodape')

</body>
</html>
