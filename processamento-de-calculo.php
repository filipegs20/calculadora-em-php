<?php
    
    header('Content-Type: application/json');
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $distancia = $_POST["distancia"];
        $combustivel = floatval($_POST["combustivel"]);
        $consumo = floatval($_POST["consumo"]);

        $calculo = ($distancia / $consumo) * $combustivel;
        $resultado = number_format($calculo, 2, ',', '');
    
        echo json_encode(['resultado' => $resultado]);
    }else {
        echo json_encode(['error' => 'Parâmetros inválidos']);
    }
    
?>