<?php

echo "<h1>Variavel Pré-Definida \$GLOBALS</h1>";

if(isset($_GET["nome"])){
  echo "<h2>Bem vindo(a) ".$_GET["nome"]."!</h2>";
}

// echo ($_GET["empresa"])?$_GET["empresa"]:"";

$get = fn($key) => isset($_GET[$key])?$_GET[$key]:"";

$id = (int)$get("id")+1;

echo '<a href="?id='.$id.'"> Proximo</a>';

echo "</br>$id";



