<?php
    
    header('Content-Type: application/json');
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $distancia = $_POST["distancia"];
        $combustivel = floatval($_POST["combustivel"]);
        $consumo = floatval($_POST["consumo"]);

        $calculo = ($distancia / $consumo) * $combustivel;
        $resultado = number_format($calculo, 2, ',', '');

        $resposta = array("resultado" => $resultado);
        echo json_encode($resposta);
    }else {
        echo json_encode('Parâmetros inválidos');
    }
    
?>
