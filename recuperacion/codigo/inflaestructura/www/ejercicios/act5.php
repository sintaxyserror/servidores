<?php
//las X son barcos e los 0 son agua 
//la funcion se llamara tirada e le tengo que pasar y y e que son los ejes
$tablero = [
    ['X','X','O','O'],
    ['O','O','O','X'],
    ['X','O','X','O'],
    ['X','X','X','X']
]; 

function tirada($barco, $x, $y){
    if($barco[$x-1][$y-1]=="X"){
        return "TOCADO"; 
    }else return "AGUA"; 
}


function generarTablero($dimensiones){

    $barco = [[]]; 
    for($x = 0; $x < $dimensiones; $x++){
        for($y = 0; $y < $dimensiones; $y ++){
            if(rand(0,1) == 0){
                $barco[$x][$y] = "O"; 
            }else $barco[$x][$y] = "X"; 

        }

    }
return $barco; 


}

$hor = 1;
$ver = 3;
$tablero = generarTablero(4); 
var_dump($tablero); 
echo "tirada en posicion $hor, $ver: "; 
echo tirada($tablero, $hor, $ver); 



?>