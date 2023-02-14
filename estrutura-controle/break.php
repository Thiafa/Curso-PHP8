<?php
echo "<h1></h1>";

$leitura = 20;
$eof = 250;

while($leitura <= $eof){
  echo "</br>";
  if($leitura==80){
    echo "Saindo do laço.<br>";
    break;
  }
  $leitura += 20;
  echo "$leitura";
}
echo "Fim </br>";


for($i = 0; $i<=10; $i++){
  for($x = 0; $x<=10; $x++){
    if($i+$x > 10){
      break 2;
    }
    echo "$i + $x = " . ($i+$x) . "</br>";
  }
}