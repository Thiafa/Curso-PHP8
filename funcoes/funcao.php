<?php
echo "<h1>Funções</h1>";


$valorA = 50;

// Subrotina
function somar( int $a = 2, int $b = 2) {
  echo"<p>$a+$b=".($a+$b)."</p>";
}

somar(3,4);

//Passagem de parâmetro por nome
somar(
  a: '10',
  b: '20', 
);

function quadrado($num):float{
  return $num*$num;
}

var_dump(quadrado(3));
echo "<p>".quadrado(2)."</p>";
echo "<p>".quadrado(4)."</p>";