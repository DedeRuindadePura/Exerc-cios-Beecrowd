<?php

// Lê o valor de X
$x = (float) readline();

// Inicializa o vetor N com o valor de X na primeira posição
$N = [$x];

// Preenche as posições subsequentes do vetor N
for ($i = 1; $i < 100; $i++) {
    // Calcula o valor para a posição atual
    $valor = $N[$i-1] / 2;
    // Adiciona o valor ao vetor N
    $N[$i] = $valor;
}

// Imprime o vetor N com 4 casas decimais
for ($i = 0; $i < 100; $i++) {
    printf("N[%d] = %.4f\n", $i, $N[$i]);
}