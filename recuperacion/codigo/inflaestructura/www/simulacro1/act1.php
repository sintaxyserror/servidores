<?php
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function sumarAndRestar($array) {
    $par = 0;
    $impar = 0;

    for($x = 0; $x < count($array); $x++) {
        if($array[$x] % 2 == 0) {
            $par += $array[$x]; 
        } else {
            $impar += $array[$x];
        }
    }

    return ['par' => $par, 'impar' => $impar];
}

$resultado = sumarAndRestar($array);



echo "EJERCICIO 1:<br>";
echo "------------------<br>";
echo "Suma de pares: " . $resultado['par'] . "<br>";
echo "Suma de impares: " . $resultado['impar'] . "<br>";
echo "EJERCICIO 2:<br>";
echo "------------------<br>";

//FORMA 1
echo "Los 10 primeros multiplos de cinco son:";
echo "<br>";
echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~<br>";
$contador = 0; 
$multiplo = 0; 
while($contador <= 10){
$multiplo = $contador * 5; 
$contador++; 

echo $multiplo . " ";  

}

//FORMA 2
$contador = 1; 
$multiplo = ""; 
$maximo = 10; 
$encontrados = 0; 

while($encontrados < $maximo){
    if($contador % 5 == 0){
        $multiplo .= $contador . " "; 
        $encontrados++;
    }
    $contador++; 

 
}
echo "<br>";
echo " Los primeros $maximo multiplos de 5 son:" . "<br>" . "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~<br>" . $multiplo . "<br>"; 






?>