<?php

/*
+$a (identidade) -> conversão de da variável para int ou float
-$a (identidade) -> oposto de $a
$a + $b (adição) 
$a - $b (subtração) 
$a * $b (multiplicação) 
$a / $b (divisão) 
$a % $b (módulo) 
$a ** $b (exponencial) 

*/
echo "<h1>Operadores de Aritméticos</h1>";

var_dump(10 + 2);
echo "</br>";
var_dump(10 - 2);
echo "</br>";
var_dump(10 * 2);
echo "</br>";
var_dump(10 / 2);
echo "</br>";
var_dump(10 % 2);
echo "</br>";
var_dump(10 ** 2);
echo "</br>";
$a = 10.9;
var_dump(+$a);
echo "</br>";
echo "-$a";