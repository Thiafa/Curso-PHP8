<?php

echo "<h1>Variavel Pré-Definida \$GLOBALS</h1>";

// Armazena as variáveis globais

$GLOBALS["nome"]="Thiago";

function mostrarNome(){
  global $idade;
  $idade = 30;
} 

mostrarNome();
echo "</br>".$idade;

var_dump($GLOBALS);