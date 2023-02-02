<?php

echo "<h1>Operadores de Concatenação</h1>";

$a = "Thiago";
$b = "César";

echo "$a"." "."$b";


$texto = "</br>O rato roeu a roupa do rei  de Roma.";
$texto .= " ";
$texto .= "O que o rato roeu?";
$texto .= " ";
$texto .= "A roupa do rei de roma.";

echo $texto;

$texto2 = <<<END
<pre>
Ola $a $b

Meus

Amigos
</pre>
END;

echo $texto2;
