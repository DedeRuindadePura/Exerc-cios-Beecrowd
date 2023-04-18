<?php
$p1 = explode(" ", readline());
$p2 = explode(" ", readline());

$res = sqrt(pow($p2[0] - $p1[0], 2) + pow($p2[1] - $p1[1], 2));
$res = number_format($res, 4, ".", "");

print ("$res\n");
?>