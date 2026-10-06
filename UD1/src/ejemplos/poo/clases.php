<?php

class MiClase{
    
    // visibilidad: public, protected, private
    // se pueden poner valores por defecto desde aquí
    public $var1; 
    private $var2;

    public function __construct(int $var1, string $var2){
        $this->var1 = $var1;    //sin $ porque sino crea la variable con nombre del parámetro de entrada
        $this->var2 = $var2;
    }

    public function saludo(){
        return "Hola, $this->var1 y $this->var2 son mis PROPIEDADES";
    }
}

class MiOtraClase{
    //Propiedades
    private string $nombre;

    //Métodos
    function __construct(string $nombre){
        $this->nombre=$nombre;
    }

    public function addNombre(string $palabra) {
        $this->nombre .= $palabra;
    }
}


?>