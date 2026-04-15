@extends('site.layouts.basico')

@section('titulo', 'Contato')

@section('conteudo')

    <div class="pagina-conteudo">

        <div class="titulo-pagina">Fale Conosco</div>
        <div class="caixa-conteudo">

            {{-- Mensagem de sucesso --}}
            @if (session('sucesso'))
                <div class="alerta alerta-sucesso">
                    {{ session('sucesso') }}
                </div>
            @endif

            {{-- Erros de validação --}}
            @if ($errors->any())
                <div class="alerta alerta-erro">
                    <strong>Corrija os erros abaixo:</strong>
                    <ul style="margin-top: 8px; padding-left: 20px;">
                        @foreach ($errors->all() as $erro)
                            <li>{{ $erro }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <p style="margin-bottom: 20px;">
                Preencha o formulário abaixo e nossa equipe entrará em contato o mais breve possível.
            </p>

            <form method="POST" action="{{ route('site.contato.salvar') }}" style="max-width: 600px;">
                @csrf

                <div class="form-grupo">
                    <label for="nome">Nome completo</label>
                    <input type="text" id="nome" name="nome" value="{{ old('nome') }}" placeholder="Seu nome">
                    @error('nome')
                        <span class="erro">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-grupo">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="seu@email.com">
                    @error('email')
                        <span class="erro">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-grupo">
                    <label for="telefone">Telefone <small style="font-weight:normal; color:#999;">(opcional)</small></label>
                    <input type="text" id="telefone" name="telefone" value="{{ old('telefone') }}" placeholder="(11) 00000-0000">
                </div>

                <div class="form-grupo">
                    <label for="assunto">Assunto</label>
                    <input type="text" id="assunto" name="assunto" value="{{ old('assunto') }}" placeholder="Assunto da mensagem">
                    @error('assunto')
                        <span class="erro">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-grupo">
                    <label for="mensagem">Mensagem</label>
                    <textarea id="mensagem" name="mensagem" placeholder="Escreva sua mensagem aqui...">{{ old('mensagem') }}</textarea>
                    @error('mensagem')
                        <span class="erro">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-vermelho">Enviar Mensagem</button>
            </form>

        </div>

        <div class="titulo-pagina">Informações de Contato</div>
        <div class="caixa-conteudo">
            <p><strong>Endereço:</strong> Avenida Exemplo, 1.000 - Bairro Centro - São Paulo/SP</p>
            <p><strong>Telefone:</strong> (11) 0000-0000</p>
            <p><strong>E-mail:</strong> contato@etecescola.com.br</p>
            <p><strong>Horário:</strong> Segunda a Sexta, das 08h às 22h</p>
        </div>

    </div>

@endsection
