
<?php
echo "<h1>Funções Geradora</h1>";

function fila(){
  yield "Anthony";
  yield "Djalma";
  yield "Gláucio";
  yield "Jõao";
  yield "Ronaldo";
}

$fila = fila();
var_dump($fila->current());
var_dump($fila->next());
var_dump($fila->current());
var_dump($fila->next());
var_dump($fila->current());
var_dump($fila->next());
var_dump($fila->current());
var_dump($fila->next());
var_dump($fila->current());
