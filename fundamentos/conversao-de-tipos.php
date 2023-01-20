<?php 
$valor = "1";
$valor *= 1.5;
$novoValor = (string)$valor;  
var_dump(get_debug_type($valor));
echo '</br>';
settype($novoValor, "float");
var_dump(get_debug_type($novoValor));
