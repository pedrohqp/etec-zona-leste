@extends('site.layouts.basico')

@section('titulo', 'Sobre a Escola')

@section('conteudo')

    <div class="pagina-conteudo">

        <div class="titulo-pagina">Sobre a Escola</div>
        <div class="caixa-conteudo">
            <p>
                A <strong>Etec Zona Leste</strong> é uma instituição de ensino técnico gratuito,
                comprometida com a formação de profissionais qualificados para o mercado de trabalho.
            </p>
            <br>
            <p>
                Fundada com o propósito de democratizar o acesso à educação técnica de qualidade,
                nossa escola oferece cursos nas áreas de Tecnologia, Negócios e Saúde, com
                professores experientes e infraestrutura moderna.
            </p>
            <br>
            <p>
                Nossos laboratórios são equipados com computadores, notebooks, impressoras 3D e
                outros recursos que proporcionam uma aprendizagem prática e eficiente.
            </p>
        </div>

        <div class="titulo-pagina">Nossa Missão</div>
        <div class="caixa-conteudo">
            <p>
                Formar profissionais técnicos competentes, éticos e comprometidos com o
                desenvolvimento social e econômico, por meio de uma educação de qualidade,
                gratuita e acessível a todos.
            </p>
        </div>

        <div class="titulo-pagina">Infraestrutura</div>
        <div class="caixa-conteudo">
            <p>Contamos com:</p>
            <br>
            <ul style="padding-left: 20px; line-height: 2;">
                <li>Laboratórios de informática modernos</li>
                <li>Sala Maker para projetos criativos</li>
                <li>Biblioteca com acervo atualizado</li>
                <li>Salas de aula equipadas com projetores</li>
                <li>Cantina e área de convivência</li>
                <li>Quadra poliesportiva</li>
            </ul>
        </div>

        <div class="titulo-pagina">Localização</div>
        <div class="caixa-conteudo">
            <p><strong>Endereço:</strong> Avenida Exemplo, 1.000 - Bairro Centro - São Paulo/SP</p>
            <p><strong>CEP:</strong> 00000-000</p>
            <p><strong>Telefone:</strong> (11) 0000-0000</p>
            <p><strong>E-mail:</strong> contato@etecescola.com.br</p>
            <br>
            <p><strong>Horário de Funcionamento:</strong> Segunda a Sexta, das 08h às 22h</p>
        </div>

    </div>

@endsection
