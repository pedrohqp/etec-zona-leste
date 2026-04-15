{{-- Cabeçalho --}}
<div class="cabecalho">
    <div class="logo">
        <div class="nome-escola">
            Etec Zona Leste
            <span>Formação Técnica Gratuita e de Qualidade</span>
        </div>
    </div>
    <div>
        @auth
            <a href="{{ route('admin.home') }}" class="btn btn-vermelho">Painel Admin</a>
        @else
            <a href="{{ route('site.login') }}" class="btn btn-vermelho">Entrar</a>
        @endauth
    </div>
</div>

{{-- Menu de navegação --}}
<nav class="menu-nav">
    <ul>
        <li><a href="{{ route('site.index') }}">Início</a></li>
        <li><a href="{{ route('site.sobre') }}">Sobre a Escola</a></li>
        <li><a href="{{ route('site.contato') }}">Contato</a></li>
    </ul>
</nav>
