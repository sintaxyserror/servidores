<!DOCTYPE html>
<html>
<head>
    <title>precio del bus</title>
</head>
<body>
    <h1>precio del bus</h1>
<?php 


$contador = ""; 
$menor = 0; 
$mayor =0; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $contador= $_POST["contador"];

  for($x = 0; $x < $contador; $x++){
    $cantidad= $_POST['cantidad']; 

    if($cantidad <= 0){
      $menor++; 
    }else{
      $mayor++; 
    }
  }

}
?>

<p><?php echo "contador de numero menor: $menor"; ?></p>
<p><?php echo "el contador de numero mayor: $mayor"; ?></p>

<form method="POST" action="">

        <label for="guess">contador</label>
        <input type="text" id="guess" name="contador" value="">
        <label for="guess">Introduce un número</label>
        <input type="text" id="guess" name="cantidad" value="">
        <input type="submit" value="dale perro">
   
       
</form>
</body>
</html>