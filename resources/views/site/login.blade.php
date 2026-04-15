@extends('site.layouts.basico')

@section('titulo', 'Login')

@section('conteudo')

    <div class="pagina-conteudo">

        <div class="titulo-pagina">Acesso Administrativo</div>
        <div class="caixa-conteudo" style="max-width: 450px;">

            {{-- Mensagem de erro de login --}}
            @if (session('erro'))
                <div class="alerta alerta-erro">
                    {{ session('erro') }}
                </div>
            @endif

            <form method="POST" action="{{ route('site.login.autenticar') }}">
                @csrf

                <div class="form-grupo">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="admin@etec.com.br">
                    @error('email')
                        <span class="erro">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-grupo">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha" placeholder="Sua senha">
                    @error('senha')
                        <span class="erro">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-vermelho">Entrar</button>
                &nbsp;
                <a href="{{ route('site.index') }}" class="btn btn-cinza">Voltar</a>
            </form>

            <br>
            <p style="font-size: 13px; color: #888;">
                <strong>Acesso padrão:</strong> admin@etec.com.br / admin123
            </p>

        </div>

    </div>

@endsection
