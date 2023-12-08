function formatarNumero(input) {
    // Remove caracteres não numéricos, exceto ponto decimal
    let valor = input.value.replace(/[^\d.]/g, '');

    // Formata o número usando Intl.NumberFormat
    valor = new Intl.NumberFormat('pt-BR', { maximumFractionDigits: 2 }).format(parseFloat(valor));

    // Atualiza o valor no campo de entrada
    input.value = valor;
}