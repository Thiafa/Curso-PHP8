<?php

echo "<h1>Estrutura de Controle - Go To</h1>";

var_dump("Inicio");

goto destino;

conteudo: 

var_dump("Conteúdo");

return;

destino: 

var_dump("Término");

goto conteudo;