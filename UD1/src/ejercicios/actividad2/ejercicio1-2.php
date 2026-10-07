<?php
include "ejercicio3.php";
class Persona{
    //propiedades
    protected string $nombre;
    protected int $edad;
    protected ?Direccion $direccion;

    public function __construct(string $nombre, int $edad){
        $this->nombre=$nombre;
        $this->edad=$edad;
    }

    public function getNombre(): string{
        return $this->nombre;
    }

    public function setNombre(string $nombre): Persona{
        $this->nombre=$nombre;
        return $this;
    }

    public function getEdad(): int{
        return $this->edad;
    }

    public function setEdad(int $edad){
        if ($edad > 0){
        $this->edad=$edad;
        return $this;
        } else{
            echo "La edad introducida es incorrecta";
        }
    }

    public function getDireccion():?Direccion{
        return $this-> direccion;
    }

    public function setDireccion(Direccion $direccion){
        $this->direccion=$direccion;
    }

    public function esMayorDeEdad():bool{
        if ($this->edad >=18){
            return true;
        }
        return false;
    }

    public function mostrarDireccion(){
        echo "ciudad: " . $this->direccion?->getCiudad() . " calle: " . $this->direccion?->getCalle() . " código postal: " . $this->direccion?->getCodigoPostal();
    }

    public function mostrarInformacion(): string{
        return "nombre: " . $this->nombre . " edad: " . $this->edad;
    }
}
?>