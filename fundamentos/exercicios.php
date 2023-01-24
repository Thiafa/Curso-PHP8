<?php
echo "<h2>Exercicio 1</h2>";

$nome = "Thiago César dos Reis Oliveira";
$idade = 21;
$esporte = "Futebol";

echo "$nome </br>";
echo "$idade </br>";
echo "$esporte </br>";

echo "<h2>Exercicio 2</h2>";

$tecnologias = ['PHP8','REACT','NODE'];

for ($i=0; $i < count($tecnologias); $i++) { 
    echo "[$i] $tecnologias[$i]";
    if($i < count($tecnologias)){
      echo "</br>";
    }
}

echo "<h2>Exercicio 3</h2>";

var_dump($idade);
echo "</br>";
var_dump((string)$idade);

echo "<h2>Exercicio 4</h2>";

function imprimirValores(){
  global $esporte, $idade, $nome;
  echo "$nome </br>";
  echo "$idade </br>";
  echo "$esporte </br>";
}

imprimirValores();