<?php 
class Persona {
    private $nombre;
    private $edad;


    public function setEdad($edad){
        $this->edad = $edad;

    }

    public function setNombre($nombre){
        $this->nombre = $nombre; 
    }

    public function getEdad(){
        return $this->edad; 
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function __construct($nombre, $edad){
        $this->nombre = $nombre;
        $this->edad = $edad; 
    }
}

class Extudiante extends Persona{
    private $carrera; 

    public function setCarrera($carrera){
        $this->carrera = $carrera; 

    }

    public function getCarrera(){
        return $this->carrera; 
    }


    public function __construct($nombre,$edad,$carrera){
        parent::__construct($nombre,$edad);
        $this->carrera = $carrera; 
    }

    public function imprimirInfo(){
        $nombre = $this->getNombre();
        $edad = $this->getEdad();
        $carrera = $this->getCarrera(); 

        echo $nombre . " " . $edad . " " . $carrera; 
    }
}


$informacion = new Extudiante("jona", 28, "desarrollo"); 

$informacion->imprimirInfo(); 












?>