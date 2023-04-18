<?php
$temp = readline();

$hora = ($temp/60)/60;


$min = ($temp/60)%60;


$seg = $temp%60;


echo floor($hora),":";
echo floor($min), ":";
echo floor($seg),"\n";

?>