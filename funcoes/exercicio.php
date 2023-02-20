<?php
echo "<h1>Exercícios Funções</h1>";

function calcIRPF(float $salario, int $dependentes){
  $aux = deduzir($salario);
  $aliquota = $aux[0];
  $deducao =  $aux[1];
  $resultadoImposto = (($salario - (($dependentes*189.59)*($aliquota/100)))-$deducao);
  return $resultadoImposto;
}

function deduzir($salario){
  if($salario < 0){
    return ;
  }
  if($salario <= 1903.98){
    return [0.0, 0.0];
  }
  else if($salario <= 2826.65){
    return [7.5, 142.80];
  }
  else if($salario <= 3751.05){
    return [15.0, 354.80];
  }
  else if($salario <= 4664.68){
    return [22.5, 636,13];
  }
  else{
    return [27.5, 869.36];
  }
}

$imposto = calcIRPF(4000.00, 2);

echo "<h3>Valor a pagar: <bold>R$$imposto</bold></h3>";

$formatLink = fn($url, $texto)=> "<a href={$url}>$texto</a>"; 

 echo $formatLink('https://www.youtube.com/watch?v=K_uGckDJOmc', "Mato Grosso e Mathias");
  