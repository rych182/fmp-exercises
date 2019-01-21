<?php

class Persona 
{
    public $nombre;
    public $edad;
    public $pais;

    public function __construct($nombre,$edad,$pais)
    {
        echo $this->nombre=$nombre;
        echo $this->edad=$edad;
        echo $this->pais=$pais;
    }
}
$objeto = new Persona("ric",24,"mex");



?>