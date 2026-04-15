{{-- Rodapé --}}
<footer class="rodape">
    <div class="rodape-colunas">
        <div class="rodape-coluna">
            <h3>Etec Zona Leste</h3>
            <p>Avenida Exemplo, 1.000 - Bairro Centro<br>
               São Paulo/SP - CEP: 00000-000</p>
        </div>
        <div class="rodape-coluna">
            <h3>Contato</h3>
            <span>(11) 0000-0000</span><br>
            <span>contato@etecescola.com.br</span>
        </div>
        <div class="rodape-coluna">
            <h3>Horário de Funcionamento</h3>
            <span>Segunda a Sexta: 08h às 22h</span>
        </div>
        <div class="rodape-coluna">
            <h3>Links Úteis</h3>
            <p><a href="{{ route('site.sobre') }}" style="color:#ccc;">Sobre a Escola</a></p>
            <p><a href="{{ route('site.contato') }}" style="color:#ccc;">Fale Conosco</a></p>
        </div>
    </div>
    <div class="rodape-base">
        &copy; {{ date('Y') }} Etec Zona Leste - Todos os direitos reservados.
    </div>
</footer>
