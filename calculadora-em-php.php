<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Custo de viagem</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="script-form-cards.js" defer></script>
    <script>
function formatarPreco(input) {
    // Remove caracteres não numéricos, exceto ponto decimal e vírgula
    let valor = input.value.replace(/[^\d,]/g, '');

    // Divide a string em parte inteira e parte decimal
    let partes = valor.split(',');

    // Formata o número com ponto de milhar e vírgula como separador decimal
    partes[0] = partes[0].replace(/\B(?=(\d{2})+(?!\d))/g, '.');

    // Atualiza o valor no campo de entrada
    input.value = partes.join(',');
}
</script>

<div id="registro">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="processamento-de-calculo.php" method="post">

                            <input type="hidden" name="acao" value="cadastrar">

                            <h3 class="text-center format-login-registro">Calcule o gasto com combustível</h3>
                            <div class="form-group">
                                <label for="distancia" class="format-login-registro">Digite a distância que vai percorrer(km):</label><br>
                                <input type="number" name="distancia" id="distancia" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="combustivel" class="format-login-registro">Valor do combustível(preço do litro):</label><br>
                                <input type="text" name="combustivel" id="combustivel" class="form-control" oninput="formatarPreco(this)" maxlength="5" required>
                            </div>
                            <div class="form-group">
                                <label for="consumo" class="format-login-registro">Consumo do veículo(km/l):</label><br> 
                                <input type="text" name="consumo" id="consumo" class="form-control" oninput="formatarPreco(this)" maxlength="5" required>
                            </div>
                            
                            <div class="div-buttom-registro-login">
                            <button type="submit" class="btn btn-outline-success buttom_registro_login">Calcular</button>
                            </div>
                            
                        </form>

                        <div id="div-result">


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="jquery.js"></script>
    <script src="scripts.js"></script>
</body>
</html>