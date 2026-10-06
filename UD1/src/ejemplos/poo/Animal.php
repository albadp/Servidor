<?php

class Animal {
    private int $id;
    protected string $nombre;

    public function __construct(int $id, ?string $nombre)
    {
        $this->id=$id;
        $this->nombre=$nombre;
    }

    public function say():string{
        $nombre = $this->nombre ?? "";
        return "$nombre: (soy un animal) awwwww";
    }
}

//Los constructores no se heredan por defecto
class Perro extends Animal{
    
    private bool $pulgas;

    public function __construct(int $id, ?string $nombre, ?bool $pulgas=false)
    {
        $this->pulgas=$pulgas;
        parent::__construct($id, $nombre);
    }

    public function say(): string
    {
        $nombre = $this->nombre ??"";
        return "$nombre: (Soy un perro): guau, guau";
    }
}
class Pájaro extends Animal{
    
    private bool $vuela;

    public function __construct(int $id, ?string $nombre, ?bool $vuela=true)
    {
        $this->vuela=$vuela;
        parent::__construct($id, $nombre);
    }

    public function say(): string
    {
        $nombre = $this->nombre ??"";
        return "$nombre: (Soy un pájaro): pío, pío";
    }
}

?>