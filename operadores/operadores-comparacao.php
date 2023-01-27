<?php
echo "<h1>Operadores de comparação</h1>";

// $a==$b igual
// $a===$b igualmente
// $a!=$b diferente
// $a<>$b diferente
// $a!==$b não idêntico
// $a<$b maior
// $a>$b menor
// $a<=$b maior e igual
// $a>=$b menor e igual
// $a<=>$b spaceship a e b for igual retorna 0; a > b reotorna 1; a < b retorn -1;
// nullsafe $country = $session?->user?->getAdress()?->country;
// null Coalese $nome = $_POST['nome]?? "Não Autorizado";

$a = 10;
$b = '10';
$c = 10.0;

echo "Igual: ";
var_dump($a == $b);

echo "</br>";
echo "Igual: ";
var_dump($a == $c);

echo "</br>";
echo "Idêntico: ";
var_dump($a === $c);

echo "</br>";
echo "Diferente: ";
var_dump($a != $b);

echo "</br>";
echo "Não idêntico: ";
var_dump($a !== $b);

echo "</br>";
echo "Não idêntico: ";
var_dump($a !== $b);

echo "</br>";
echo "Spaceship: ";
var_dump($a <=> $b);

$valor = NULL;

echo "</br>";
echo "Spaceship: ";
var_dump($valor??"Não há valor");