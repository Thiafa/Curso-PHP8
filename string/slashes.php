<?php

// Adicionar barras de escape
$msg = "Caixa d'água";
echo "<p>" . addslashes($msg) . "</p>";

// Remove barras de escape
$msg = "\Caixa \d'água";
echo "<p>" . stripslashes($msg) . "</p>";
