<?php

$original = "Carlos";
$search = "Karlos";

var_dump(soundex($original) == soundex($search));
var_dump(metaphone($original) == metaphone($search));
