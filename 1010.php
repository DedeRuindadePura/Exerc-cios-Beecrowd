<?php
$linha1 = readline();
$linha2 = readline();

$p1 = explode(" ", $linha1);
$cp1 = intval($p1[1]);
$vp1 = floatval($p1[2]);

$p2 = explode(" ", $linha2);
$cp2 = intval($p2[1]);
$vp2 = floatval($p2[2]);

$tp = ($cp1*$vp1) + ($cp2*$vp2);
$tp = number_format($tp, 2, ".", "");

echo "VALOR A PAGAR: R$ " . $tp . "\n";
?>