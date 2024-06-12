
<?php 
$tirada = 1; 
$ronda = 1; 
$judador1 = []; 
$judador2 = []; 
$dado1 = random_int(1,6);
$dado2 = random_int(1,6);

while($tirada <= 5){
    array_push($judador1, $dado1,$dado2); 
    $tirada++; 
    var_dump($judador1); 
}

while($tirada <= 5){
    array_push($judador2, $dado1,$dado2); 
    $tirada++; 
    var_dump($judador2); 
}















?>
