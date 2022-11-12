<?php
include ("class_lib.php");

$factoriales1 = new factoriales(1, "Uno");
$factoriales2 = new factoriales(2, "Dos");
$factoriales3 = new factoriales(6, "Seis");
$factoriales4 = new factoriales(24, "Veintecuatro");

echo "<br> El factoral de 1 es: " . $factoriales1->cual_factorial();
echo "<br> El factoral de 2 es: " . $factoriales2->cual_factorial();
echo "<br> El factoral de 3 es: " . $factoriales3->cual_factorial();
echo "<br> El factoral de 4 es: " . $factoriales4   ->cual_factorial();
?>