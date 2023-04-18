<?php

// lê os valores do vetor X
for ($i = 0; $i < 10; $i++) {
    $x[$i] = intval(fgets(STDIN));
}

// substitui os valores nulos e negativos por 1
for ($i = 0; $i < 10; $i++) {
    if ($x[$i] <= 0) {
        $x[$i] = 1;
    }
}

// imprime o vetor X
for ($i = 0; $i < 10; $i++) {
    echo "X[$i] = {$x[$i]}\n";
}
?>