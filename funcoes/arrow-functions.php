<?php 
echo "<h1>Arrow Functions</h1>";

$valor = 10;
$somar = fn($a,$b)=>($a+$b)*$valor;

echo $somar(10, 5);