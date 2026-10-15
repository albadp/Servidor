<?php
include_once "ejercicio1-2.php";
include_once "ejercicio9.php";

class Estudiante extends PersonaAbstracta{

    private string $grado;
    private array $calificaciones = [];

    public function __construct(string $grado, string $nombre, int $edad, array $calificaciones)
    {
        $this->grado=$grado;
        $this->calificaciones = $calificaciones;
        parent::__construct($nombre, $edad);
    }

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

    public static function calcularPromedio(array $notas):float{
        $media = 0.0;
        foreach ($notas as $nota){
            $media += $nota;
        }
        $media = $media/count($notas);
        return $media;
    }

    public function getMedia():float{
        return Estudiante::calcularPromedio($this->calificaciones);
    }

    public function addCalificacion(int $calificacion){
        array_push($this->calificaciones,$calificacion);
    }

    public function mostrarInformacion(): string {
        return parent::mostrarInformacion() . " grado:" . $this->grado;
    }

    #[Override]
    public function esMayorDeEdad(): bool
    {
        return $this->edad>17;
    }
}
?>