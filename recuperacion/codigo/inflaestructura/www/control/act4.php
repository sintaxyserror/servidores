<!DOCTYPE html>
<html>
<head>
    <title>politicas de llamadas</title>
</head>
<body>
    <h1>politicas de llamadas</h1>
<?php 

$minutos = ""; 
$domingo = ""; 
$dia = "";

$precioFranja1 = 1;
$precioFranja2 = 0.8;
$precioFranja3 = 0.7;
$precioFranja4 = 0.5; 
$franja1 = 5;
$franja2 = 3;
$franja3 = 2;
$precio = ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $minutos= $_POST["minutos"];
    $domingo = $_POST["domingo"];
    $dia = $_POST["dia"];
   

  if($minutos <= $franja1){
    $precio = $minutos * $precioFranja1; 

  }elseif($minutos <= $franja1 + $franja2){
    $precio = $precioFranja1 * $franja1 + (($minutos - $franja1) * $precioFranja2); 
  }elseif($minutos <= $franja1 + $franja2 + $franja3 ){
    $precio = ($precioFranja1 * $franja1) + ($precioFranja2 * $franja2) + ((($minutos - $franja1) - $franja2) * $precioFranja3); 
  }else{
    $precio = ($precioFranja1 * $franja1) + ($precioFranja2 + $franja2) + ($precioFranja3 * $franja3) + ($minutos - $franja1 - $franja2 - $franja3) * $precioFranja4; 
  }
     
if($domingo == "si" || $domingo == "SI"){
    $precio *= 1.03; 
}

if($dia == "mañana"){
    $precio *= 1.15;
}elseif($dia == "tarde"){
    $precio *=1.10; 
}



   

}
?>

<p><?php echo $precio; ?></p>

<form method="POST" action="">
    <label for="guess">Introduce un número de minutos:</label>
    <input type="text" id="guess" name="minutos" value="">
    <label for="domingo">Es domingo? (si/no):</label>
    <input type="text" id="guess" name="domingo" value="">
    <label for="domingo">mañana o tarde?</label>
    <input type="text" id="guess" name="dia" value="">


    <input type="submit" value="Submit">
</form>
</body>
</html>