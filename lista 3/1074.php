<?php
// Lê o valor de N, que indica a quantidade de casos de teste
$n = intval(fgets(STDIN));

// Loop para ler cada um dos casos de teste
for ($i = 0; $i < $n; $i++) {
    // Lê o valor do caso de teste
    $x = intval(fgets(STDIN));

    // Verifica se o valor é igual a zero
    if ($x == 0) {
        echo "NULL\n";
    } else {
        // Verifica se o valor é par ou ímpar
        $parImpar = ($x % 2 == 0) ? "EVEN" : "ODD";

        // Verifica se o valor é positivo ou negativo
        $posNeg = ($x > 0) ? "POSITIVE" : "NEGATIVE";

        // Imprime a mensagem correspondente
        echo "$parImpar $posNeg\n";
    }
}
?>