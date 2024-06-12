<?php 
echo "EJERCICIO 2:<br>"; 
echo "~~~~~~~~~~~~~~~~~~~~~~~~~<br>"; 
$contador = 1; 
$primos = 0; 
while($contador <= 50){
    if($contador % 2 == 0){
        $primos .= $contador . " ";
       
    }
    $contador++; 
}
echo $primos; 