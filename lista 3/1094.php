<?php

// inicializa as variáveis para contar o total de cobaias de cada tipo
$total_cobaias = 0;
$total_coelhos = 0;
$total_ratos = 0;
$total_sapos = 0;

// lê o número de casos de teste
$n = intval(fgets(STDIN));

// loop pelos casos de teste
for ($i = 0; $i < $n; $i++) {
    // lê a quantidade e o tipo de cobaia utilizada
    $linha = explode(" ", fgets(STDIN));
    $quantia = intval($linha[0]);
    $tipo = trim($linha[1]);

    // atualiza o total de cobaias e o total de cobaias de cada tipo
    $total_cobaias += $quantia;
    if ($tipo == 'C') {
        $total_coelhos += $quantia;
    } elseif ($tipo == 'R') {
        $total_ratos += $quantia;
    } elseif ($tipo == 'S') {
        $total_sapos += $quantia;
    }
}

// calcula o percentual de cobaias de cada tipo em relação ao total de cobaias
$percentual_coelhos = $total_coelhos / $total_cobaias * 100;
$percentual_ratos = $total_ratos / $total_cobaias * 100;
$percentual_sapos = $total_sapos / $total_cobaias * 100;

// exibe os resultados
echo "Total: {$total_cobaias} cobaias\n";
echo "Total de coelhos: {$total_coelhos}\n";
echo "Total de ratos: {$total_ratos}\n";
echo "Total de sapos: {$total_sapos}\n";
echo "Percentual de coelhos: " . number_format($percentual_coelhos, 2) . " %\n";
echo "Percentual de ratos: " . number_format($percentual_ratos, 2) . " %\n";
echo "Percentual de sapos: " . number_format($percentual_sapos, 2) . " %\n";
?>