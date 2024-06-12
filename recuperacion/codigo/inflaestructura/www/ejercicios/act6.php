<?php
class tablero {
 
    protected $dimension; 
    protected $tablero = []; 

    public function __construct($dimension){
        $this->dimension = $dimension;
        $this->generarTablero(); 
    }


   public function getDimension(){
        return $this->dimension; 
    }
   public function getTablero(){
        return $this->tablero; 
    }



    public function setDimension($dimension) {
        return $this->dimension;
    }
    public function setTablero($tablero) {
        return $this->tablero;
    }



public function generarTablero(){
    for($x = 0; $x < $this->dimension; $x++){
        for($y = 0; $y < $this->dimension; $y ++){
       $this->tablero[$x][$y] = rand(0,1) ? '0':'x';

        }
    }
}
function tirada($x, $y){
    if($this->tablero[$x-1][$y-1]=="x"){
    return "TOCADO"; 
    }else { 
        return "AGUA";
    } 
}


}

$nuevoTablero = new tablero(4); 
$tirada = $nuevoTablero->tirada(2,2); 


echo "resultado: $tirada\n"; 






?>