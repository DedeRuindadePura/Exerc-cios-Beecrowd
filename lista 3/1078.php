<?php

// Lê o valor de N
$n = intval(fgets(STDIN));

// Imprime a tabuada de N
for ($i = 1; $i <= 10; $i++) {
    echo $i . " x " . $n . " = " . ($i * $n) . "\n";
}

?>