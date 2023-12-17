$('#login-form').submit(function(e){
    e.preventDefault();

    var s_distancia = $('#distancia').val();
    var s_combustivel = $('#combustivel').val();
    var s_consumo = $('#consumo').val();

    $.ajax({
        url:'http://localhost/calculadora-em-php/calculadora-em-php.php',
        method: 'POST',
        data: {distancia: s_distancia, combustivel: s_combustivel, consumo: s_consumo},
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded'
    }).done(function(result){
        if (result.error) {
            console.error(result.error);
        } else {
            // Exiba o resultado diretamente na página
            $('#login-box').append("<div class='form-group'><h3>" + result.resultado + "</h3></div>");
        }
    }).fail(function(xhr, status, error) {
        // Exiba mensagens de erro no console
        console.error(status + ": " + error);
    })
});