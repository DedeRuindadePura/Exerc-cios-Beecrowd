<?php

// Função que calcula a soma dos Y ímpares consecutivos a partir de X
function calcularSoma($X, $Y) {
    $soma = 0;
    $contador = 0;

    // Caso X seja par, somamos 1 para obter o primeiro ímpar
    if ($X % 2 == 0) {
        $X++;
    }

    // Percorremos os Y ímpares consecutivos a partir de X e somamos
    while ($contador < $Y) {
        $soma += $X;
        $X += 2;
        $contador++;
    }

    return $soma;
}

// Lê a quantidade de casos de teste
$quantidadeCasosTeste = intval(fgets(STDIN));

// Processa cada caso de teste
for ($i = 1; $i <= $quantidadeCasosTeste; $i++) {
    // Lê os valores X e Y
    $valores = explode(" ", fgets(STDIN));
    $X = intval($valores[0]);
    $Y = intval($valores[1]);

    // Calcula e imprime a soma
    $soma = calcularSoma($X, $Y);
    echo $soma . "\n";
}

?>
