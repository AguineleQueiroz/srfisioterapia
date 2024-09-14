<script>
    function mostrarDetalhes(atendimentoId) {
        const atendimento = document?.getElementById(atendimentoId);
        let border = atendimento.style.borderBottomStyle;
        if(border !== 'none') {
            border = 'none';
        }
        const atendimento_details = document?.getElementById(atendimentoId+'_details');
        atendimento_details.classList.toggle('hidden')
    }
</script>

