<?php
include "clases.php";

echo "objeto de MiClase";

$o1 = new MiClase(4,"");
$o1->var1; // sin $ para acceder
echo "<br>";
var_dump($o1);

?>