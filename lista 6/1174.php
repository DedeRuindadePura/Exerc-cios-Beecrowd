<?php

// Lê o vetor A[100]
for ($i = 0; $i < 100; $i++) {
    $a[$i] = (float) fgets(STDIN);
}

// Procura por valores menores ou iguais a 10 e exibe o resultado
for ($i = 0; $i < 100; $i++) {
    if ($a[$i] <= 10) {
        printf("A[%d] = %.1f\n", $i, $a[$i]);
    }
}

?>