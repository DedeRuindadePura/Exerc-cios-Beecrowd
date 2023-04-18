<?php

$N = array();

$valor = intval(fgets(STDIN)); // lê o valor inteiro

$N[0] = $valor; // coloca o valor na primeira posição do vetor

for ($i = 1; $i < 10; $i++) { // preenche as posições subsequentes com o dobro do valor anterior
    $N[$i] = $N[$i-1] * 2;
}

// imprime o vetor
for ($i = 0; $i < 10; $i++) {
    echo "N[{$i}] = {$N[$i]}\n";
}

?>