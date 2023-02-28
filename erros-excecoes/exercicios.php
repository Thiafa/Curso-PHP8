<?php

echo "<h1>Exercicios</h1>";

$cpf = '330.237.410-00';

class CpfException extends Exception{};

function verificarCpf($cpf){
  $cpfFormatado = str_replace(".", "", $cpf)  ;
  $cpfFormatado = str_replace("-", "", $cpfFormatado)  ;
    
  $newCpf = strlen($cpfFormatado);
  if($newCpf === 11){
    return true;
  }else{
    false;
  }
}

function usarCpf($cpf){
try {
  if(!(verificarCpf($cpf))){
    throw new CpfException('CPF Inválido!', 400);
  }
} catch (CpfException $e) {
  echo $e->getMessage();
}
}

usarCpf('330.237.410-00');