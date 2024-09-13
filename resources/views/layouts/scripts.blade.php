<script>
    function mostrarDetalhes(atendimentoId) {
        const atendimento = document?.getElementById(atendimentoId);
        atendimento.style.borderBottomStyle = 'none';
        const atendimento_details = document?.getElementById(atendimentoId+'_details');
        atendimento_details.classList.toggle('hidden')
    }
</script>

