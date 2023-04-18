<?php

// Lê o valor de N
$n = intval(fgets(STDIN));

// Percorre todos os números de 1 a 10000
for ($i = 1; $i <= 10000; $i++) {
    
    // Verifica se o número atual tem resto 2 na divisão por N
    if ($i % $n == 2) {
        // Imprime o número atual
        echo $i . "\n";
    }
}

?>