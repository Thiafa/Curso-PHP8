<?php

echo "<h1>Funções</h1>";

$curso = function($nome){ 
  return printf("Curso: $nome </br>");
};

$curso('PHP 8');

function somar($a, $b, $callback){
  $callback($a+$b);
}

// use só funciona com funções anônimas

$fn = function($resultado)use($curso){
  $curso('PHP 8');
  var_dump($resultado);
};
 
somar(2,3, $fn);