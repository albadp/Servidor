<?php

class MiClase{
    
    // visibilidad: public, protected, private
    public $var1;
    private $var2;

    public function __construct(int $var1, string $var2){
        $this->var1 = $var1;    //sin $ porque sino crea la variable con nombre del parámetro de entrada
        $this->var2 = $var2;
    }
    public function saludo(){
        return "Hola, $this->var1 y $this->var2 son mis atributos";
    }
}


?>