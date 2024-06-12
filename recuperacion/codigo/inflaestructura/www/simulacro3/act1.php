<?php 
echo "EJERCICIO 1<br>"; 
echo "~~~~~~~~~~~~~~~~~~~~~~~~~<br>"; 
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$suma = 0;
$multiplicacion = 1; 


    for($x = 0; $x < count($numeros); $x++){
        if($numeros[$x] % 2 == 0){
            $suma += $numeros[$x];
        }
       
    }

    for($y = 0; $y < count($numeros); $y++){
        if($numeros[$y] % 2 != 0){
          
            $multiplicacion *= $numeros[$y]; 
        }
    }
    echo "la suma de los numeros pares es: $suma<br>"; 
    echo "el producto de los numeros impares es: $multiplicacion<br>"; 
















?>