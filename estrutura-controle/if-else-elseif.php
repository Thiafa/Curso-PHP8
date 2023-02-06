<?php 

echo "<h1>Estrutura de Controle</h1>";

$a = 1;
$b = 10;

if($a % 2 === 0 && $a != $b){
  echo "$a é par e diferente de $b.";
}else if($a === $b && $a%2===1){
  echo "$a é impar e é igual a $b.";
}else if($a === $b && $a%2===0){
  echo "$a é par e é igual a $b.";
} else{
  echo "$a é ímpar e diferente de $b";
}

echo "</br>";

// Ternário
echo ($a %2 === 0) ? "$a é Par": "$a é Impar";