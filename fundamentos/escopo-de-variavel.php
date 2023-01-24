<?php
$google = 'https://google.com';

// ! Arquivos Incluidos - as variaveis do escopo global do arquivo incluido também serão lidos.
// include "constantes.php";

function exemplo(){
  // global $google;
  // echo $google;
  global $origamid;
  $origamid = '<a href="https://origamid.com" target="blank">acessar</a>';
}


exemplo();
echo $origamid;