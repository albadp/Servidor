<?php
include_once "ejercicio4-7.php";

class Curso{

    protected array $estudiantes = [];

    public function addEstudiante(Estudiante $estudiante){
        array_push($this->estudiantes,$estudiante);
    }

    public function mostrarEstudiantes(){
        foreach($this->estudiantes as $estudiante){
            echo $estudiante->mostrarInformacion;
        }
    }
}


