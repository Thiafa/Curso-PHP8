<?php
echo "<h1>Operadores de execução</h1>";

$output = `dir`;
$oem = sapi_windows_cp_get("oem");

$output = sapi_windows_cp_conv($oem, 65001, $output);
echo "<pre>$output</pre>";

// Pode utilizar para verificar se algum servidor que está sendo utilizado está funcionanado ou não entre outras coisas
