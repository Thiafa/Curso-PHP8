<?php 
echo "<h1>Operador de Controle - Switch</h1>";  

$nome = "César";
// $nome = "zxcv";

switch($nome){
  case "Thiago": 
    echo "O nome é Thiago";
    break;
  case "César":
    echo "O nome é César";
    break;
    default:
    echo"...";
  }