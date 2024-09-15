<script>
    function hideBoxes(atendimentoId) {
        const detailsBoxes = document?.getElementsByClassName('details');
        for (let box of detailsBoxes) {
            if(!(box.id === atendimentoId)) {
                box.classList.add('hidden');
            }
        }
    }

    function mostrarDetalhes(atendimentoId) {
        hideBoxes(atendimentoId+'_details');
        const atendimento = document?.getElementById(atendimentoId);
        let border = atendimento.style.borderBottomStyle;
        if(border !== 'none') {
            border = 'none';
        }
        const atendimento_details = document?.getElementById(atendimentoId+'_details');
        const isHidden = atendimento_details.classList.contains('hidden');
        isHidden ? atendimento_details.classList.remove('hidden') : atendimento_details.classList.add('hidden');
    }
</script>

