<?php
echo "<h1>exceptions.php</h1>";



function manipuladorDeExcecao($exception){
  echo $exception->getMessage()."</br>";
  echo $exception->getFile()."</br>";
  echo $exception->getLine()."</br>";
  echo $exception->getCode()."</br>";
}

set_exception_handler("manipuladorDeExcecao");

throw new Exception("Essa é minha exeção", 400);