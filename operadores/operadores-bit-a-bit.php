<?php
echo "<h1>Operadores bit a bit</h1>";
$a =32;
$b =96;
$qnt = 1;

var_dump($a&$b);
echo "</br>";
var_dump($a|$b);
echo "</br>";
var_dump($a^$b);
echo "</br>";
var_dump(~$a);
echo "</br>";

var_dump($a);
echo "</br>";
var_dump($a<<$qnt);
echo "</br>";
var_dump($a>>$qnt);