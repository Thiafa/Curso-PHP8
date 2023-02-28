<?php

function main(){
echo "<h1>Try, Catch and Throw</h1>";

class SenhaException extends Exception{};

$nome = "João";
$senha = "123";
try {
  if(!$nome){
    throw new Exception("Preencha o seu nome corretamente.</br>", 400);
  }
  if(strlen($senha)<6){
    throw new SenhaException("A senha precisa de no mínimo 8 caracteres.</br>", 400);
  }
} catch(SenhaException $th) {
  echo $th->getMessage();
} catch (Exception $th) {
  echo $th->getMessage();
}
finally{
  echo "Fim do formulário</br>";
}

$exibeErro = fn($erro) => throw new Exception($erro);

echo $exibeErro('ERRO! Throw Expression');





};

main();