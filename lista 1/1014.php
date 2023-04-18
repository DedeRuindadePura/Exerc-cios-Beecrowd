<?php
$distancia = intval(fgets(STDIN));
$combustivel = floatval(fgets(STDIN));

$consumo_medio = $distancia / $combustivel;

printf("%.3f km/l\n", $consumo_medio);

?>