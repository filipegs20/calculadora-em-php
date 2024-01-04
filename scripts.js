$('#login-form').submit(function(e){
    e.preventDefault();

    var s_distancia = $('#distancia').val();
    var s_combustivel = $('#combustivel').val();
    var s_consumo = $('#consumo').val();
    
    $.ajax({
        url:'http://localhost/calculadora-em-php/processamento-de-calculo.php',
        method: 'POST',
        data: { distancia: s_distancia, combustivel: s_combustivel, consumo: s_consumo },
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded'
    }).done(function(result) {
        // Verifica se há um resultado válido antes de exibir
        if (result.resultado !== undefined) {
            // Exibicao do resultado diretamente na pagina
            $('#div-result').html("<div class='form-group'><h3>O custo com combustível será de R$" + result.resultado + ".</h3></div>");
        } else {
            // Se houver um erro ou algo inesperado, exibe uma mensagem de erro
            $('#div-result').html("<div class='form-group'><h4>Erro ao calcular</h4></div>");
        }
    }).fail(function(jqXHR, textStatus, errorThrown) {
        console.error('Erro na requisição:', textStatus, errorThrown);

        // Se a requisição falhar, exiba uma mensagem de erro
        $('#div-result').html("<div class='form-group'><h3>Erro na requisição</h3></div>");
    });
});

