<?php

while (true) {
  // Lê os valores de M e N
  fscanf(STDIN, "%d %d", $m, $n);

  // Verifica se algum dos valores é menor ou igual a zero
  if ($m <= 0 || $n <= 0) {
    break;
  }

  // Determina o menor e o maior valor
  if ($m < $n) {
    $min = $m;
    $max = $n;
  } else {
    $min = $n;
    $max = $m;
  }

  // Inicializa a variável de soma
  $sum = 0;

  // Imprime a sequência do menor até o maior e calcula a soma
  for ($i = $min; $i <= $max; $i++) {
    echo $i . ' ';
    $sum += $i;
  }

  // Imprime a soma
  echo 'Sum=' . $sum . "\n";
}

?>