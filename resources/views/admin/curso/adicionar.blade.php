@extends('admin.layouts.basico')

@section('titulo', isset($curso) ? 'Editar Curso' : 'Novo Curso')

@section('conteudo')

    <div class="pagina-conteudo">

        <div class="titulo-pagina">
            {{ isset($curso) ? 'Editar Curso' : 'Novo Curso' }}
        </div>
        <div class="caixa-conteudo">

            {{-- Menu do módulo --}}
            <div class="menu-modulo">
                <ul>
                    <li><a href="{{ route('admin.curso.adicionar') }}">Novo Curso</a></li>
                    <li><a href="{{ route('admin.curso') }}">Pesquisar</a></li>
                    <li><a href="{{ route('admin.curso.listar') }}">Listar Todos</a></li>
                </ul>
            </div>

            {{-- Mensagem de sucesso/erro --}}
            @if ($msg ?? '')
                <div class="alerta alerta-sucesso">{{ $msg }}</div>
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

            <form method="POST" action="{{ route('admin.curso.adicionar') }}" style="max-width: 500px;">
                @csrf

                {{-- Campo oculto para ID (edição) --}}
                <input type="hidden" name="id" value="{{ $curso->id ?? '' }}">

                <div class="form-grupo">
                    <label for="nome">Nome do Curso</label>
                    <input type="text" id="nome" name="nome"
                           value="{{ $curso->nome ?? old('nome') }}"
                           placeholder="Ex: Técnico em Informática">
                    @error('nome')
                        <span class="erro">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-grupo">
                    <label for="area">Área</label>
                    <input type="text" id="area" name="area"
                           value="{{ $curso->area ?? old('area') }}"
                           placeholder="Ex: Tecnologia">
                    @error('area')
                        <span class="erro">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-grupo">
                    <label for="turno">Turno</label>
                    <select id="turno" name="turno">
                        <option value="">Selecione o turno</option>
                        @foreach (['Manhã', 'Tarde', 'Noite'] as $turno)
                            <option value="{{ $turno }}"
                                {{ (($curso->turno ?? old('turno')) == $turno) ? 'selected' : '' }}>
                                {{ $turno }}
                            </option>
                        @endforeach
                    </select>
                    @error('turno')
                        <span class="erro">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-grupo">
                    <label for="duracao">Duração</label>
                    <input type="text" id="duracao" name="duracao"
                           value="{{ $curso->duracao ?? old('duracao') }}"
                           placeholder="Ex: 2 anos">
                    @error('duracao')
                        <span class="erro">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-vermelho">
                    {{ isset($curso) ? 'Salvar Alterações' : 'Cadastrar Curso' }}
                </button>
                &nbsp;
                <a href="{{ route('admin.curso.listar') }}" class="btn btn-cinza">Cancelar</a>
            </form>

        </div>

    </div>

@endsection
