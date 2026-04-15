@extends('admin.layouts.basico')

@section('titulo', 'Mensagens')

@section('conteudo')

    <div class="pagina-conteudo">

        <div class="titulo-pagina">Mensagens de Contato</div>
        <div class="caixa-conteudo">

            @if ($mensagens->isEmpty())
                <div class="alerta alerta-info">Nenhuma mensagem recebida ainda.</div>
            @else
                <table class="tabela">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Assunto</th>
                            <th>Mensagem</th>
                            <th>Data</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mensagens as $mensagem)
                            <tr>
                                <td>{{ $mensagem->id }}</td>
                                <td>{{ $mensagem->nome }}</td>
                                <td>{{ $mensagem->email }}</td>
                                <td>{{ $mensagem->assunto }}</td>
                                <td>{{ \Str::limit($mensagem->mensagem, 60) }}</td>
                                <td>{{ $mensagem->created_at->format('d/m/Y H:i') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="paginacao">
                    {{ $mensagens->links() }}
                </div>

                <br>
                <small style="color: #888;">
                    Total: {{ $mensagens->total() }} mensagens
                </small>
            @endif

        </div>

    </div>

@endsection
