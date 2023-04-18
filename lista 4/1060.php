<?php

$T = intval(fgets(STDIN));

for ($i = 0; $i < $T; $i++) {
  list($PA, $PB, $G1, $G2) = sscanf(fgets(STDIN), "%d %d %f %f");
  
  $anos = 0;
  while ($PA <= $PB) {
    $PA = intval($PA * (1 + ($G1/100)));
    $PB = intval($PB * (1 + ($G2/100)));
    $anos++;
    if ($anos > 100) {
      echo "Mais de 1 seculo.\n";
      break;
    }
  }
  
  if ($anos <= 100) {
    echo $anos . " anos.\n";
  }
}

?>