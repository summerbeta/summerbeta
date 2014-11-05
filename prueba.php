<?php 

$formato = 'Y-m-d';
$mayorEdad = mktime(0, 0, 0, date("m"),   date("d"),   date("Y")-18);
$fechaMayorEdad =date($formato, $mayorEdad);
$fechaHoy = date($formato);

echo "<p>$fechaMayorEdad</p>";
echo "<p>$fechaHoy</p>";
echo "<p>$mayorEdad</p>";