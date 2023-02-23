<?php
echo "<h1>Error Reporting</h1>";

// Serve para determinar os erros e as variantes de erros.
error_reporting(0); //Desablita
error_reporting(E_ALL);

require('teste.php');