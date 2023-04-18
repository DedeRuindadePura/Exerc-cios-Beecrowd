<?php
$linha = explode(' ', readline());
$a = intval($linha[0]);
$b = intval($linha[1]);
$c = intval($linha[2]);
$d = intval($linha[3]);

if ($b > $c && $d > $a && $c+$d > $a+$b && $c > 0 && $d >0 && $a%2==0) {
    echo "Valores aceitos\n";
} else {
    echo "Valores nao aceitos\n";
}
?>