<?php
include_once "ejercicio1-2.php";

class Estudiante extends Persona{

    private string $grado;
    private array $calificaciones = [];

    public function getGrado():string{
        return $this->grado;
    }

    public function setGrado(string $grado){
        $this->grado=$grado;
    }

    public function getCalificaciones():array{
        return $this->calificaciones;
    }

    public function setCalificaciones(array $calificaciones){
        $this->calificaciones=$calificaciones;
    }

    public function addCalificaion(int $calificacion){
        array_push($this->calificaciones,$calificacion);
    }

    #[Override]
    public function mostrarInformacion(): string {
        return parent::mostrarInformacion() . " grado:" . $this->grado;
    }

}
?>