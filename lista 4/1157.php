<?php

// lê o valor de N
$n = intval(fgets(STDIN));

// percorre os números de 1 a N
for ($i = 1; $i <= $n; $i++) {
  
  // verifica se i é divisor de N
  if ($n % $i == 0) {
    
    // se for, imprime i na tela
    echo $i . "\n";
    
  }
  
}

?>