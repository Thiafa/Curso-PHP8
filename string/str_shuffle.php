<?php

$msg = "Hcde";

$array = [];

for ($i = 0; $i < 15; $i++) {
  $txt = str_shuffle($msg);
  if (!(in_array($txt, $array))) {
    $array[$i] = $txt;
  }
}
// echo st
var_dump($array);
