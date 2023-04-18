<?php

$n = intval(fgets(STDIN));

for ($i = 0; $i < $n; $i++) {
  $valores = explode(" ", fgets(STDIN));
  $nota1 = floatval($valores[0]);
  $nota2 = floatval($valores[1]);
  $nota3 = floatval($valores[2]);
  
  $media = ($nota1 * 2 + $nota2 * 3 + $nota3 * 5) / 10;
  
  echo number_format($media, 1, '.', '') . "\n";
}

?>