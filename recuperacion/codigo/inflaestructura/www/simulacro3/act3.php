<?php 
class Vehiculo{
    protected $marca;
    protected $modelo; 



    public function setMarca($marca){
        $this->marca = $marca;
    }
    public function setModelo($modelo){
        $this->modelo = $modelo; 
    }
    public function getMarca(){
        return $this->marca;
    }
    public function getModelo(){
        return $this->modelo; 
    }

    public function __construct($marca,$modelo){
        $this->marca = $marca; 
        $this->modelo = $modelo; 

    }

}

class Coche extends Vehiculo{
    protected $combustible; 


    public function setCombustible($combustible){
        $this->combustible = $combustible;

    }
    public function getCombustible(){
        return $this->combustible; 
    }

    public function __construct($marca,$modelo,$combustible){
        parent:: __construct($marca,$modelo);
        $this->combustible = $combustible; 

    }

    public function Info(){
        $marca = $this->getMarca(); 
        $modelo = $this->getModelo();
        $combustible = $this->getCombustible();

        echo "La marca del Vehiculo es: $marca<br>"; 
        echo "El modelo del Vehiculo es: $modelo<br>"; 
        echo "El combustible del Vehiculo es: $combustible<br>"; 
    }
    
}



$car = new Coche("Opel", "Insignia", "Diesel"); 

$car->info(); 


















?>