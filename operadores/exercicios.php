<?php
$preco = 1000.0;
$desconto =10;
$frete = 35.49;

$total = ($preco - ($preco* (float)$desconto)/100) + $frete;
$compra = $total <= $preco && $total < 1020 ?? true;

var_dump($total);
var_dump($compra);
