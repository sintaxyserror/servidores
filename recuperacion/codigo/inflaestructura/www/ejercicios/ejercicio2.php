<?php
$notas = [10,5,8,4,6,8,3,8,7,6];
 
$minimo = $notas[0];
$maximo = $notas[0];
$posicionMaxima = 0;
$posicionMinima = 0;
 
for($x = 0; $x < count($notas); $x ++){
 
    if($notas[$x] < $minimo){
        $minimo = $notas[$x];
        $posicionMinima = $x;
   
    }
 
    if($notas[$x] > $maximo){
        $maximo = $notas[$x];
    $posicionMaxima = $x;
    }
 
 
}
 
array_splice($notas,$posicionMinima,1);
array_splice($notas,$posicionMaxima,1);
echo $minimo;
echo $maximo;
 
 
 
for($y = 0; $y < count($notas); $y ++){
    $media += $notas[$y];
 
}
 
 
$mediaFinal = $media / count($notas);
 
echo $mediaFinal;








    ?>

  

   