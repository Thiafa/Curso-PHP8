<?php
echo "<h1>Manipular Erros</h1>";

// set_error_handler() ->  Função para manipular erros no script

function tratarErro($errno, $errstr, $errfile, $errline){

$texto = <<<END
  <p>Número do Erro: $errno.</p>
  <p>Mensagem do Erro: $errstr.</p>
  <p>Arquivo do Erro: $errfile.</p>
  <p>Linha do Erro: $errline.</p>
END;
echo $texto;
}



set_error_handler('tratarErro');