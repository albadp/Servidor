<?php
include_once "ejercicio1-2.php";

class Profesor extends Persona{

    protected string $especialidad;

    public function getEspecialidad():string{
        return $this->especialidad;
    }

    public function setEspecialidad(string $especialidad){
        $this->especialidad=$especialidad;
    }

    #[Override]
    public function mostrarInformacion(): string {
        return parent::mostrarInformacion() . " especialidad: " . $this->especialidad;
    }
}




