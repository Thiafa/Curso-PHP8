<?php

$comentario = "OLá <strong>Hcode</strong>";
echo $comentario . "</br>";
echo strip_tags($comentario, "<strong>") . "</br>";
