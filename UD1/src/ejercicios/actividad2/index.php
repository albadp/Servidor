<?php
include_once "ejercicio1-2.php";
include_once "ejercicio3.php";
include_once "ejercicio4-5-7.php";
include_once "ejercicio6.php";
include_once "ejercicio8.php";
include_once "ejercicio9.php";

$direccion = new Direccion("Bosque Maldito", "Raven", 100000);

$person = new Persona("Eugenie", 20, $direccion);

if ($person->esMayorDeEdad()){
    echo "si, soy responsable";
}

echo "<br>";

$person->setDireccion($direccion);

echo $person->mostrarDireccion();
$notas=[5,5.5,6];
$person2 = new Estudiante("superior", "Alba", 25, $notas);

$person2->setGrado("superior");

echo "<br>";

echo "media: " . $person2->getMedia();

echo "<br>";

echo $person2->mostrarInformacion();

$person3 = new Profesor("Maldiciones", "Allan", 54);

$person3->setEspecialidad("Maldiciones");

echo "<br>";

echo $person3->mostrarInformacion();

echo "<br>";

$curso = new Curso();

$person4 = new Estudiante("superior", "Ilyas", 27, $notas);

$curso->addEstudiante($person2);
$curso->addEstudiante($person4);

echo $curso->mostrarEstudiantes();


?>