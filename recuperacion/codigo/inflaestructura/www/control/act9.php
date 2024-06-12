<?php 
$sucesion1 = 0;
$sucesion2 = 1;

echo $sucesion1 . "\n"; 
echo $sucesion2 . "\n"; 

for ($x = 0; $x < 10; $x++) {
    $sucesion3 = $sucesion1 + $sucesion2; 
    echo $sucesion3 . "\n"; 

 
    $sucesion1 = $sucesion2;
    $sucesion2 = $sucesion3;
}
?>
