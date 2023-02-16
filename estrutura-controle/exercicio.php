<?php
echo "<h1>Exercicios PHP</h1>";

//Exercicio 1

$autorizado = true;
$admin = true;
$nome = "Thiago";

if($autorizado && $admin){ 
  echo "<p>Área administrativa $nome Bem vindo</p>";
}

$quantidade = 2;
$valorUnitario=1200.00;
$subTotal = $quantidade*$valorUnitario;
$frete=40.00;

if($quantidade>3){
  $desconto = ($subTotal*10)/100;
  $total = $subTotal - $desconto + $frete;
  var_dump($total);
}else{
  $desconto = ($subTotal*5)/100;
  $total = $subTotal - $desconto + $frete;
  var_dump($total);
}

for ($i=1920; $i < 2022; $i++) { 
  $option = "<option value='$i' selected='selected'>$i</option>";
  
  if($i === 2021) {
    echo <<<END
    <select name="sel" id="sel">
      $option;
    </select>
    END;
  }
}

