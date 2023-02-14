<?php

echo "<h1>Estrutura de Controle - Return</h1>";

$valor = somar(3,4);

function somar($a,$b){
  return $a+$b;
}

echo $valor."</br>";

return;

echo $valor + 10;