<!DOCTYPE html>
<html>
<head>
    <title>precio del bus</title>
</head>
<body>
    <h1>precio del bus</h1>
<?php 

$bus = ""; 
$personas = ""; 
$km = "";
$coste = ""; 

$a = 2;
$b = 2.5; 
$c = 3;



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bus= $_POST["bus"];
    $personas = $_POST["personas"];
    $km = $_POST["km"];
   

  if($personas >= 20 && $bus = "A" || $bus = "a"){
    $coste = $personas * $a * $km; 
  }elseif($personas >= 20 && $bus = "B" || $bus = "b"){
    $coste = $personas * $b * $km; 
  }elseif($personas >= 20 && $bus = "C" || $bus = "c"){
    $coste = $personas * $c * $km; 
  }else{
 echo "has introducido un valor no valido"; 
  }



   

}
?>

<p><?php echo $coste; ?></p>

<form method="POST" action="">
    <label for="guess">Introduce un número de bus:</label>
    <input type="text" id="guess" name="bus" value="">
    <label for="personas">cuantas personas?:</label>
    <input type="text" id="guess" name="personas" value="">
    <label for="personas">cuantos km?</label>
    <input type="text" id="guess" name="km" value="">


    <input type="submit" value="Submit">
</form>
</body>
</html>