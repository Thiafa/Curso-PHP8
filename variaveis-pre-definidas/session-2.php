<?php

session_start();

$empresa = $_SESSION['empresa'];

echo "<h2>Empresa: $empresa<h2>";