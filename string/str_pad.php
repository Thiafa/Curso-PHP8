<?php

$nome = "João Menino";
$email = "joaomenino@gmail.com";
$idade = 30;

echo str_pad($nome, 130, "---", STR_PAD_LEFT) . "\n";
echo str_pad($email, 130, "---", STR_PAD_RIGHT) . "\n";
echo str_pad($idade, 130, "---", STR_PAD_BOTH) . "\n";
