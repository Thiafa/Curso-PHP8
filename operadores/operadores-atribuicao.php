<?php

/*
* Operadores
* = atribuição
* *= multiplicação
* *= subtração
* += multiplicação
* /= divisão
* .= concatenação

Atribuição por referência

$a = &$b;

Mesmo local de moméria
*/
echo "<h1>Operadores de Atribuição</h1>";

$valor = 10;
$valor /= 2;
echo "$valor</br>";
$valor *= 2;
echo "$valor</br>";
$valor .= 3;
echo "$valor</br>";