<?php
include "clases.php";
include "Persona.php";
include "Animal.php";

echo "objeto de MiClase";

// se pueden instanciar clases de forma dinámica 
// p. ej: $nombre="MiClase" $o2=new $nombre;
$o1 = new MiClase(4,""); // si constructor no existe se pueden quitar los parántesis
$nombre = "MiOtraClase";
$o2 = new $nombre("A");
$o1->var1; // sin $ para acceder
$o2 -> addNombre("b");
echo "<br>";
var_dump($o1);
echo "<br>";
var_dump($o2);

echo "<br> <h1>Persona</h1> <br>";
$p1 = new Persona("Pedro", "Pérez");

$p1->setNombre("John")
    ->setApellido1("Lucas")
    ->setApellido2("Barreiro");
// $p1->setApellido1("Lucas");
// $p1->setApellido2("Barreiro");
var_dump($p1);

echo "<h1>perro que hereda de animal</h1> </br>";

$toxo = new Perro(1,"Bruno");

var_dump($toxo);

echo $toxo->say();




?>