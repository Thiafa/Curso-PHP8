<?php
echo "<h1>Funções Recursiva</h1>";

function calcularFib($anterior, $proximo){
  $soma = $anterior + $proximo; 
  if($soma ==3 ){
    echo $anterior."</br>".$proximo."</br>";
  }
  if($soma != 2584){
    echo $soma."</br>";
    return calcularFib($proximo, $soma);
  }
}

calcularFib(1,2);

function recursivo($a){
  if($a<=100){
    echo $a." ";
    recursivo(++$a);
  }
}

recursivo(0);