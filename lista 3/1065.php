<?php
// Variável para contar a quantidade de valores pares
$count = 0;

// Loop para ler os 5 valores
for ($i = 1; $i <= 5; $i++) {
    // Lê o valor da entrada padrão
    $num = intval(fgets(STDIN));

    // Verifica se o valor é par
    if ($num % 2 == 0) {
        // Incrementa o contador de valores pares
        $count++;
    }
}

// Imprime a quantidade de valores pares lidos
echo "$count valores pares\n";
?>  