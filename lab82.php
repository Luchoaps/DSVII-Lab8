<?php
include ("class_lib.php");

$numeroPar1 = new numeroPar("Cuatro", 0,4);
$numeroPar2 = new numeroPar("Seis", 1,6);
$numeroPar3 = new numeroPar("Ocho", 3,8);
$numeroPar4 = new numeroPar("Diez", 5,10);

echo "<br> El Numero Par es: " . $numeroPar1->dame_tamano();
echo "<br> El Numero Par es: " . $numeroPar2->dame_tamano();
echo "<br> El Numero Par es: " . $numeroPar3->dame_tamano();
echo "<br> El Numero Par es: " . $numeroPar4->dame_tamano();


?>