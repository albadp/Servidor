<?php
include "ejercicio3.php";
class Persona{
    //propiedades
    /**
     * Para unir getters y setters en los atributos (con hooks):
     * p. ej: public string $nombre{
     *  get{
     *      return  $this->nombre;
     *  }
     *  set(string $valor){
     *      $this->nombre = $valor;
     *  }
     * }
     * Se llamaría al get: $objetoPersona->nombre;
     * Se llamaría al set: $objetoPersona->nombre = "Pepe";
     * el get se puede formar también: get=>$this->nombre;
     */
    protected string $nombre;
    protected int $edad;
    protected ?Direccion $direccion;

    /**
     * Los hooks también se pueden hacer en los parámetros del constructor.
     * Al igual que definir las propiedades de la clase.
     */
    public function __construct(string $nombre, int $edad, ?Direccion $direccion){
        $this->nombre=$nombre;
        $this->edad=$edad;
        $this->direccion = $direccion;
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
            throw new Exception ("La edad introducida es incorrecta");
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

    /**
     * Se podría hacer en la clase Direccion con la función mágica __toString()
     * (En realidad más correcto)
     */
    public function mostrarDireccion(){
        return "ciudad: " . $this->direccion?->getCiudad() . " calle: " . $this->direccion?->getCalle() . " código postal: " . $this->direccion?->getCodigoPostal();
    }

    public function mostrarInformacion(): string{
        return "nombre: " . $this->nombre . " edad: " . $this->edad;
    }
}
?>