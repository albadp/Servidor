<?php
include_once "ejercicio1-2.php";
include_once "ejercicio3.php";
include_once "ejercicio4-7.php";
include_once "ejercicio6.php";
include_once "ejercicio8.php";

$person = new Persona("Eugenie", 20);

if ($person->esMayorDeEdad()){
    echo "si, soy responsable";
}

echo "<br>";

$direccion = new Direccion("Bosque Maldito", "Raven", 100000);

$person->setDireccion($direccion);

$person->mostrarDireccion();

$person2 = new Estudiante("Alba", 25);

$person2->setGrado("superior");

echo "<br>";

echo $person2->mostrarInformacion();

$person3 = new Profesor("Allan", 54);

$person3->setEspecialidad("Maldiciones");

echo "<br>";

echo $person3->mostrarInformacion();

?>