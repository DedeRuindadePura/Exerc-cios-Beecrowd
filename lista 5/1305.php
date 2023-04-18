<?php
while ($num = fgets(STDIN)) { // lê cada linha da entrada
  $cutoff = fgets(STDIN);
  $num = (float) $num; // converte a string para um número real
  $cutoff = (float) $cutoff; // converte a string para um número real
  $decimal = $num - floor($num); // calcula a parte decimal de $num
  if ($decimal > $cutoff) {
    echo ceil($num) . "\n"; // arredonda para cima se a parte decimal for maior que $cutoff
  } else {
    echo floor($num) . "\n"; // arredonda para baixo caso contrário
  }
}
?>