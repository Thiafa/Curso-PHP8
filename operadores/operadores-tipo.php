<?php

  class MinhaClasse {

}
  class OutraClasse {

}
$a = new MinhaClasse;

// Utilizado para verificar instâncias de tipo
var_dump($a instanceof MinhaClasse);
var_dump($a instanceof OutraClasse);