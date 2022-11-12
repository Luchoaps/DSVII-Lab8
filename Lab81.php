<?php
include ("class_lib.php");

//instanciamos las ventas
$ventas1 = new ventas("verde", 100);
$ventas2 = new ventas("amarilla", 78);
$ventas3 = new ventas("roja", 50);

//mostramos el color de la venta
echo "<br> La venta verde es: " . $ventas1 -> numero_varia();
echo "<br> La venta amarilla es: " . $ventas2 -> numero_varia();
echo "<br> La venta roja es: " . $ventas3 -> numero_varia();
?>