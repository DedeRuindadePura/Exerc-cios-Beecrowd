<?php

$maiorValor = PHP_INT_MIN; // define o maior valor como o menor valor inteiro possível
$posicao = 0;

for ($i = 1; $i <= 100; $i++) {
    $valor = intval(fgets(STDIN)); // lê um valor inteiro do console
    if ($valor > $maiorValor) {
        $maiorValor = $valor;
        $posicao = $i;
    }
}

echo $maiorValor . "\n" . $posicao . "\n";

?>