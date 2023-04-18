<?php

$risada = trim(fgets(STDIN));
$vogais = ['a', 'e', 'i', 'o', 'u'];
$vogaisRisada = '';

// remove as consoantes da risada
for ($i = 0; $i < strlen($risada); $i++) {
    if (in_array($risada[$i], $vogais)) {
        $vogaisRisada .= $risada[$i];
    }
}

// verifica se a sequência de vogais é igual na ordem direta e inversa
if ($vogaisRisada == strrev($vogaisRisada)) {
    echo "S\n";
} else {
    echo "N\n";
}

?>
