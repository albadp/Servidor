<?php

abstract class PersonaAbstracta{

    protected int $edad;
    protected string $nombre;

    public function __construct($nombre, $edad)
    {
        $this->nombre = $nombre;
        $this->edad=$edad;
    }
    
    public abstract function mostrarInformacion():string;
    public abstract function esMayorDeEdad():bool;
}

