<?php

// Função que calcula o n-ésimo termo da sequência de Fibonacci
function fibonacci($n) {
    $a = 0;
    $b = 1;
    
    for ($i = 0; $i < $n; $i++) {
        $temp = $a + $b;
        $a = $b;
        $b = $temp;
    }
    
    return $a;
}

// Lê o número de casos de teste
$casosTeste = intval(fgets(STDIN));

// Executa cada caso de teste
for ($i = 0; $i < $casosTeste; $i++) {
    // Lê o valor de N
    $n = intval(fgets(STDIN));
    
    // Calcula o n-ésimo termo da sequência de Fibonacci
    $fibN = fibonacci($n);
    
    // Imprime o resultado
    echo "Fib(" . $n . ") = " . $fibN . "\n";
}

?>