<?php
$nome = trim(fgets(STDIN));
$sf = floatval(fgets(STDIN));
$tv = floatval(fgets(STDIN));
$comissao = $tv * 0.15;
$total_receber = $sf + $comissao;
printf("TOTAL = R$ %.2f\n", $total_receber);

?>