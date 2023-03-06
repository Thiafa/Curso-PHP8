<?php

echo "<h1>Variáveis pré-definidas</h1>";

session_start();
$_SESSION["empresa"] = "HCODE Treinamentos";

echo $_SESSION['empresa'];
echo "</br>";
echo "Criando variável de sessão";
echo "</br>";
echo '<a href="session-2.php">Veja o resultado</a>';