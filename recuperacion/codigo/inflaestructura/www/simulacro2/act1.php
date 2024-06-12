<?php
echo "EJERCICIO 1<br>"; 
echo "~~~~~~~~~~~~~~~~~~~~~~~~~<br>"; 
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$minimo = $array[0]; 
$maximo = $array[0]; 

function minimo($array, $minimo, $maximo){
    for($x = 0; $x < count($array); $x++){
        if($array[$x] < $minimo){
            $minimo = $array[$x]; 
        }
    }
    return $minimo; 
}

$resultado_minimo = minimo($array,$minimo,$maximo); 

echo "El número mínimo es: $resultado_minimo<br>";


function maximo($array, $minimo, $maximo){
    for($x = 0; $x <count($array); $x++){
        if($array[$x] > $maximo){
            $maximo = $array[$x];
        }
    }
    return $maximo; 
}

$resultado_maximo = maximo($array,$minimo,$maximo); 

echo "El número máximo es: $resultado_maximo<br>";

function diferencia($maximo, $minimo){
    $resta = $maximo - $minimo; 
    return $resta; 
}

$numero_diferencia = diferencia($resultado_maximo, $resultado_minimo); 

echo "La diferencia entre el máximo y el mínimo es: $numero_diferencia<br>";


echo "EJERCICIO 2<br>"; 
echo "~~~~~~~~~~~~~~~~~~~~~~~~~<br>"; 

$numero1 = 0;
$numero2 = 1; 
echo "Los 15 primeras secuencias de Fibonacci son:" . $numero2 . ", "; 
for($x = 0; $x < 14; $x++){
    $numero3 = $numero1 + $numero2; 
    $numero1 = $numero2;
    $numero2 = $numero3;  

    echo  $numero3 . ", "; 
}
?>

