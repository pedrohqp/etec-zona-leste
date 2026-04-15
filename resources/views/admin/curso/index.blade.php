@extends('admin.layouts.basico')

@section('titulo', 'Cursos')

@section('conteudo')

    <div class="pagina-conteudo">

        <div class="titulo-pagina">Cursos</div>
        <div class="caixa-conteudo">

            {{-- Menu do módulo --}}
            <div class="menu-modulo">
                <ul>
                    <li><a href="{{ route('admin.curso.adicionar') }}">Novo Curso</a></li>
                    <li><a href="{{ route('admin.curso') }}">Pesquisar</a></li>
                </ul>
            </div>

            <p style="margin-bottom: 15px;">Utilize os campos abaixo para pesquisar cursos cadastrados.</p>

            <form method="POST" action="{{ route('admin.curso.listar') }}" style="max-width: 500px;">
                @csrf

                <div class="form-grupo">
                    <label for="nome">Nome do curso</label>
                    <input type="text" id="nome" name="nome" placeholder="Ex: Informática">
                </div>

                <div class="form-grupo">
                    <label for="area">Área</label>
                    <input type="text" id="area" name="area" placeholder="Ex: Tecnologia">
                </div>

                <div class="form-grupo">
                    <label for="turno">Turno</label>
                    <select id="turno" name="turno">
                        <option value="">Todos os turnos</option>
                        <option value="Manhã">Manhã</option>
                        <option value="Tarde">Tarde</option>
                        <option value="Noite">Noite</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-vermelho">Pesquisar</button>
                <a href="{{ route('admin.curso.listar') }}" class="btn btn-cinza">Ver Todos</a>
            </form>

        </div>

    </div>

@endsection
