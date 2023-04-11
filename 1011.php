<?php
$raio = floatval(fgets(STDIN));
$pi = 3.14159;
$volume = (4.0 / 3) * $pi * pow($raio, 3);
printf("VOLUME = %.3f\n", $volume);

?>