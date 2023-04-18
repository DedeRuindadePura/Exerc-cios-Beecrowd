<?php
$temp = readline();
$vel = readline();

$dist = $vel * $temp;

$lit = ($dist/12);
$lit = number_format($lit, 3, ".", "");
print("$lit\n");

?>