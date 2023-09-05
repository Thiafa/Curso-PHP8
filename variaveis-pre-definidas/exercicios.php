<?php
setcookie("produto", "Curso PHP 8 - Orientação a Objetos", expires_or_options: time() + 86400);

//   TODO = Crie um cookie armazenado o prduto = "Curso PHP 8 - Orientação a Objetos"
//   TODO = Recupere os dados do coookie gravada, verifique se o usuário ainda possui cookie, exiba: "Ganhe 5% de deconto para comprar: " e exiba o conteúdo do cookie

$cookie = $_COOKIE;

if (isset($cookie["produto"])) {
  echo ("Ganhe 5% de deconto para comprar: " . $cookie["produto"]);
} else {
  echo ("Sem cookie");
}
