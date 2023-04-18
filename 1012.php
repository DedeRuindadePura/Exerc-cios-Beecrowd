<?php
$linha = readline();
$valores = explode(' ',$linha);
$a = doubleval($valores[0]);
$b = doubleval($valores[1]);
$c = doubleval($valores[2]);

$tri = ($a * $c)/2;
$tri = number_format($tri, 3, ".", "");

$cir = ($c * $c) * 3.14159;
$cir = number_format($cir, 3, ".", "");

$tra = (($a + $b) * $c)/2;
$tra = number_format($tra, 3, ".", "");

$qua = $b * $b;
$qua = number_format($qua, 3, ".", "");

$ret = ($a * $b);
$ret = number_format($ret, 3, ".", "");

print("TRIANGULO: $tri\n");
print("CIRCULO: $cir\n");
print("TRAPEZIO: $tra\n");
print("QUADRADO: $qua\n");
print("RETANGULO: $ret\n");
?>