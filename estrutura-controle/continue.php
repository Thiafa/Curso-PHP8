<?php
echo "<h1>Estrutura de Controle - Continue</h1>";

// Continue é utilizado para ignorar faixas em um bloco de loop
for( $i= 0; $i<=250;$i++){
  if($i > 100 && $i < 200)continue;
  echo $i." ";  
}