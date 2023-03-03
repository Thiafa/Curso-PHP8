<form action="post.php" method="post">
  <label for="nome">Digite seu nome</label>
  <input type="text" name="nome" id="nome"/>
  <label for="idade">Digite seu idade</label>
  <input type="number" name="idade" id="idade"/>
  <button type="submit">Entrar</button>
</form>
<?php
echo "<h1>Variavel Pré-Definida \$POST</h1>";

$nome = $_POST["nome"];
$idade = $_POST["idade"];

$frase = <<<END
Nome $nome
Idade $idade 
END;

echo $frase;?>