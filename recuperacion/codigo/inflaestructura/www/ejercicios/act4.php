<?php
$notas = [10,5,8,4,6,8,3,8,7,6];
$numero = posicionMaximo($notas); 
$numero2 = posicionMinimo($notas); 
$numero3 = numeroMaximo($notas); 
$numero4 = numeroMinimo($notas); 


function posicionMaximo($notas){
    $maximo = $notas[0];
    $posicionMaxima = 0;

    for($x = 0; $x < count($notas); $x ++){
        if($notas[$x] > $maximo){
            $maximo = $notas[$x];
            $posicionMaxima = $x;
        }

    }
return $posicionMaxima;
}


echo "La posicion del numero maximo es: $numero\n"; 



function posicionMinimo($notas){
    $minimo = $notas[0];
    $posicionMinimo = 0;

    for($x = 0; $x < count($notas); $x ++){
        if($notas[$x] < $minimo){
            $minimo = $notas[$x];
            $posicionMinimo = $x;
        }

    }
return $posicionMinimo;
}

echo "La posicion del umero minimo es: $numero2\n"; 

function numeroMaximo($notas){
    $maximo = $notas[0];
    $posicionMaxima = 0;

    for($x = 0; $x < count($notas); $x ++){
        if($notas[$x] > $maximo){
            $maximo = $notas[$x];
            $posicionMaxima = $x;
        }

    }
return $maximo;
}

echo "el numero maximo es: $numero3\n";


function numeroMinimo($notas){
    $minimo = $notas[0];
    $posicionMinimo = 0;

    for($x = 0; $x < count($notas); $x ++){
        if($notas[$x] < $minimo){
            $minimo = $notas[$x];
            $posicionMinimo = $x;
        }

    }
return $minimo;
}

echo "el numero minimo es: $numero4\n"; 