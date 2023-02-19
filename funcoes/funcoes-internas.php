<?php

echo "<h1>Função Interna</h1>";

function somar($a,$b){
  return $a+$b;
}

if(function_exists('somar')){
  echo "Função somar existe.</br>";
}else{
  echo 'Não existe';
}

if(function_exists('strlen')){
  echo "Função strlen existe.</br>";
}else{
  echo 'Não existe';
}