<?php
// Variável para contar os valores positivos
$count = 0;

// Loop para ler os 6 valores
for ($i = 1; $i <= 6; $i++) {
    // Lê o valor da entrada padrão
    $num = floatval(fgets(STDIN));

    // Verifica se o valor é positivo e diferente de zero
    if ($num > 0) {
        // Incrementa o contador de valores positivos
        $count++;
    }
}

// Imprime a quantidade de valores positivos lidos
echo "$count valores positivos\n";
?>