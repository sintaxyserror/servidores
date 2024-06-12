<?php
class Animal{
    protected $nombre;
    protected $tipo; 

    public function setNombre($nombre){
        $this->nombre = $nombre; 
    }
    public function setTipo($tipo){
        $this->tipo = $tipo; 
    }
    public function getNombre(){
        return $this->nombre; 
    }
    public function getTipo(){
        return $this->tipo; 
    }

    public function __construct($nombre,$tipo){
        $this->nombre = $nombre; 
        $this->tipo = $tipo; 
    }
}

class Perro extends Animal{
    protected $raza; 

    public function setRaza($raza){
        $this->raza;
    }
    public function getRaza(){
        return $this->raza; 
    }

    public function __construct($nombre,$tipo,$raza){
        parent:: __construct($nombre,$tipo); 
        $this->raza = $raza; 
    }


    public function Informacion(){
        $nombre = $this->getNombre();
        $tipo = $this->getTipo();
        $raza = $this->getRaza(); 

        echo "Nombre del perro:<br>" . "$nombre<br>" . " " . "Tipo de Perro:<br>" . "$tipo<br>" . " " . "La raza es:<br>" . " " . "$raza<br>"; 
    }
}

echo "EJERCICIO 3<br>"; 
echo "~~~~~~~~~~~~~~~~~~~~~~~~~<br>"; 
$info1 = new Perro("koby", 5, "pastor Aleman"); 
$info1->Informacion(); 
echo ".........................................<br>"; 
$info2 = new Perro("stop", 10, "boxer"); 
$info2->Informacion(); 