<?php
echo "<h1>Operadores de arrays</h1>";

$empresasAereas = ["Gol","Latam","Azul"];
$empresasAereas2 = ["Delta","British Airlines","American Airlines","Qatar Airways","Emirates"];

$empresas = $empresasAereas + $empresasAereas2;
 
var_dump($empresas);
echo "</br>";

$arr1 = [0, 250, 35];
$arr2 = [2 => 0, 0 => 250,1=> 35];

var_dump($arr1 === $arr2);
echo "</br>";
var_dump($arr1 == $arr2);


