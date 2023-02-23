<?php 
echo "<h1>Display Errors</h1>";

// Recurso para dar suporte ao desenvolvimento, nunca deve ser usado em sistema de produção
ini_set('display_errors', 0);

require('hcode.php');

echo "Depois do require";