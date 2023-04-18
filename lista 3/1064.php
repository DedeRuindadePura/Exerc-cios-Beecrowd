<?php
// Variáveis para contar a quantidade e a soma dos valores positivos
$count = 0;
$sum = 0;

// Loop para ler os 6 valores
for ($i = 1; $i <= 6; $i++) {
    // Lê o valor da entrada padrão
    $num = floatval(fgets(STDIN));

    // Verifica se o valor é positivo
    if ($num > 0) {
        // Incrementa o contador de valores positivos
        $count++;

        // Adiciona o valor à soma dos valores positivos
        $sum += $num;
    }
}

// Imprime a quantidade de valores positivos lidos
echo "$count valores positivos\n";

// Verifica se há valores positivos para calcular a média
if ($count > 0) {
    // Calcula a média dos valores positivos
    $media = $sum / $count;

    // Imprime a média com 1 casa decimal
    echo number_format($media, 1, '.', '') . "\n";
} else {
    // Caso não haja valores positivos, imprime zero
    echo "0.0\n";
}
?>