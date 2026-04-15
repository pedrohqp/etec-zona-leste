@extends('admin.layouts.basico')

@section('titulo', 'Cursos - Listagem')

@section('conteudo')

    <div class="pagina-conteudo">

        <div class="titulo-pagina">Cursos - Listagem</div>
        <div class="caixa-conteudo">

            {{-- Menu do módulo --}}
            <div class="menu-modulo">
                <ul>
                    <li><a href="{{ route('admin.curso.adicionar') }}">Novo Curso</a></li>
                    <li><a href="{{ route('admin.curso') }}">Pesquisar</a></li>
                </ul>
            </div>

            {{-- Mensagem de sucesso --}}
            @if (session('msg'))
                <div class="alerta alerta-sucesso">{{ session('msg') }}</div>
            @endif

            {{-- Tabela de cursos --}}
            <table class="tabela">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome do Curso</th>
                        <th>Área</th>
                        <th>Turno</th>
                        <th>Duração</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($cursos as $curso)
                        <tr>
                            <td>{{ $curso->id }}</td>
                            <td>{{ $curso->nome }}</td>
                            <td>{{ $curso->area }}</td>
                            <td>{{ $curso->turno }}</td>
                            <td>{{ $curso->duracao }}</td>
                            <td class="acoes">
                                <a href="{{ route('admin.curso.editar', $curso->id) }}" class="editar">Editar</a>
                                <a href="{{ route('admin.curso.excluir', $curso->id) }}"
                                   class="excluir"
                                   onclick="return confirm('Deseja excluir o curso {{ $curso->nome }}?')">Excluir</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" style="text-align: center; color: #888;">Nenhum curso encontrado.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            {{-- Paginação --}}
            <div class="paginacao">
                {{ $cursos->appends($request)->links() }}
            </div>

            <br>
            <small style="color: #888;">
                Exibindo {{ $cursos->count() }} de {{ $cursos->total() }} cursos
                (página {{ $cursos->currentPage() }} de {{ $cursos->lastPage() }})
            </small>

        </div>

    </div>

@endsection
