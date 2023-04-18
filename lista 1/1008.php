<?php
    $nf = readline();
    $nh = readline();
    $vph = readline();
$vph = number_format($vph , 2, ".", "");

$salario = $vph * $nh;
$salario = number_format($salario , 2, ".", "");

echo "NUMBER = $nf\n";

echo "SALARY = U$ $salario\n";
?>