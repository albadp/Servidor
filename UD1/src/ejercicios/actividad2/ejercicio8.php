<?php
include_once "ejercicio4-5-7.php";

class Curso{

    protected array $estudiantes = [];


    public function addEstudiante(Estudiante $estudiante){
        array_push($this->estudiantes,$estudiante);
    }

    public function mostrarEstudiantes(): string{
        $toret = "";
        foreach($this->estudiantes as $estudiante){
            $toret .= $estudiante->mostrarInformacion()."<br>";
        }
        return $toret;
    }
}


