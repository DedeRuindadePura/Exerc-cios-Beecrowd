<?php
$valor = (int) fgets(STDIN);
$cedulas = [100, 50, 20, 10, 5, 2, 1];
echo $valor . "\n";

foreach ($cedulas as $cedula) {
    $quantidade = (int) ($valor / $cedula);
    echo $quantidade . " nota(s) de R$ " . $cedula . ",00\n";
    $valor = $valor % $cedula;
}
?>