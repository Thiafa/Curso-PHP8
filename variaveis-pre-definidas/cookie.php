<?php

echo "<h1>Variaveis Pré-definida Cookie</h1>";


$f = new ReflectionFunction('setcookie');
var_dump($f->getParameters());

exit;

setcookie(
  name: 'empresa',
  value: "Hcode",
  expires_or_options: time()+86400
);

echo "</br>";
var_dump($_COOKIE);