<?php 
$a=50;
$b= &$a;
$c = $a;

var_dump($a);
var_dump($b);
var_dump($c);

$a = 250;
echo '</br>';

var_dump($a);
var_dump($b);
var_dump($c);