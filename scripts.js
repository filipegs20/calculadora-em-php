$('#login-form').submit(function(e){
    e.preventDefault();

    var s_distancia = $('#distancia').val();
    var s_combustivel = $('#combustivel').val();
    var s_consumo = $('#consumo').val();

    $.ajax({
        url:'http://localhost/calculadora-em-php/calculadora-em-php.php',
        method: 'POST',
        data: { distancia: s_distancia, combustivel: s_combustivel, consumo: s_consumo },
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded'
    }).done(function(result) {
        // Verifica se há um resultado válido antes de exibir
        if (result.resultado !== undefined) {
            // Exibe o resultado diretamente na página
            $('#div-result').html("<div class='form-group'><h3>" + result.resultado + "</h3></div>");
        } else {
            // Se houver um erro ou algo inesperado, exiba uma mensagem de erro
            $('#div-result').html("<div class='form-group'><h3>Erro ao calcular</h3></div>");
        }
    }).fail(function(jqXHR, textStatus, errorThrown) {
        console.error('Erro na requisição:', textStatus, errorThrown);

        // Se a requisição falhar, exiba uma mensagem de erro
        $('#div-result').html("<div class='form-group'><h3>Erro na requisição</h3></div>");
    });
});

