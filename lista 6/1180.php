<?php

// Leitura do tamanho do vetor
$n = (int) fgets(STDIN);

// Leitura dos valores do vetor
$valores = explode(' ', fgets(STDIN));
$valores = array_map('intval', $valores);

// Inicialização do menor valor e sua posição
$menorValor = $valores[0];
$posicaoMenorValor = 0;

// Busca pelo menor valor e sua posição
for ($i = 1; $i < $n; $i++) {
    if ($valores[$i] < $menorValor) {
        $menorValor = $valores[$i];
        $posicaoMenorValor = $i;
    }
}

// Impressão do menor valor e sua posição
echo "Menor valor: $menorValor\n";
echo "Posicao: $posicaoMenorValor\n";

?>