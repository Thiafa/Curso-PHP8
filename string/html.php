<?php
$html = '<a href="https://google.com">Acesse</a>';

// var_dump($html);
// var_dump(htmlentities($html, ENT_NOQUOTES));
echo "<pre>";
echo $html;
echo "</br>";
echo htmlentities($html);
echo "</br>";
echo htmlentities($html, ENT_NOQUOTES);
echo "</br>";
echo htmlentities($html, ENT_NOQUOTES);
echo "</pre>";
