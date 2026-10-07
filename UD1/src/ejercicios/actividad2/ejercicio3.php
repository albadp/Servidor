<?php
class Direccion {

    protected string $calle;
    protected string $ciudad;
    protected int $codigoPostal;

    public function __construct(string $calle, string $ciudad, int $codigoPostal){
        $this-> calle = $calle;
        $this->ciudad = $ciudad;
        $this->codigoPostal = $codigoPostal;
    }

    public function getCalle():string{
        return $this->calle;
    }

    public function setCalle(string $calle){
        $this->calle = $calle;
    }

    public function getCiudad():string{
        return $this->ciudad;
    }

    public function setCiudad(string $ciudad){
        $this->ciudad=$ciudad;
    }

    public function getCodigoPostal():int{
        return $this->codigoPostal;
    }

    public function setCodigoPostal(int $codigoPostal){
        $this->codigoPostal=$codigoPostal;
    }
}
?>