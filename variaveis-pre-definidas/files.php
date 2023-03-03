<form action="files.php" method="post" enctype="multipart/form-data">
  <label for="nome">Digite seu nome</label>
  <input type="text" name="nome" id="nome"/>

  <label for="arquivo">Escolha seu arquivo</label>
  <input type="file" name="arquivo" id="arquivo"/>
  
  <button type="submit">Entrar</button>
</form>


<?php
echo "<h1>Variavel Pré-Definida \$_FILES</h1>";
 
$nome = $_POST["nome"];

echo "<h3>Bem Vindo $nome</h3>";

var_dump($_FILES["arquivo"]);


