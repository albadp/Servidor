<?php
include_once "ejercicio1-2.php";

include_once "ejercicio9.php";

class Profesor extends PersonaAbstracta{

    protected string $especialidad;

    public function __construct(string $especialidad, string $nombre, int $edad)
    {
        $this->especialidad = $especialidad;
        parent::__construct($nombre, $edad);
    }

    public function getEspecialidad():string{
        return $this->especialidad;
    }

    public function setEspecialidad(string $especialidad){
        $this->especialidad=$especialidad;
    }

    #[Override]
    public function mostrarInformacion(): string {
        return "soy el profesor " . $this->nombre . " con la especialidad: " . $this->especialidad;
    }

    #[Override]
    public function esMayorDeEdad(): bool
    {
        return $this->edad>17;
    }
}




