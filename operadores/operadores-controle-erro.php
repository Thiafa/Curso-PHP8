<?php
echo "<h1>Operadores de controle de erro</h1>";

$arq = file('asdasd');
$arquivo = @file('asdasd') or die("Arquivo não localizado");
