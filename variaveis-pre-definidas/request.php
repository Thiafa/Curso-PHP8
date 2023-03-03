<form action="" method="post">
  <label for="nome">Digite seu nome</label>
  <input type="text" name="nome" id="nome"/>
  <label for="idade">Digite seu idade</label>
  <input type="number" name="idade" id="idade"/>
  <button type="submit">Entrar</button>

</form>

<?php

echo "<h1>Variavel Pré-Definida \$_REQUEST</h1>";

var_dump($_REQUEST["nome"]);
var_dump($_REQUEST["idade"]);
var_dump($_REQUEST["sobrenome"]);