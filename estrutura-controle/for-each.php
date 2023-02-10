<?php

echo "<h1>Operador de Controle - For</h1>";  

$array = [
"João",
"Maria",
"Lucas",
"José",
];

foreach($array as $chave => $item){
  echo "</br>[$chave] $item";
}

foreach($_SERVER as $valor){
  var_dump($valor);
}