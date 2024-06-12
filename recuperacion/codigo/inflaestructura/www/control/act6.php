<!DOCTYPE html>
<html>
<head>
    <title>precio del bus</title>
</head>
<body>
    <h1>precio del bus</h1>
<?php 

$total = 0; 
$contador = 1; 



if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
  while($contador <=12){
    $numero= $_POST["mes$contador"];
    if(is_numeric($numero)){
      $total += $numero; 
      $contador++;
    }
  }
   

}
?>

<p><?php echo $total; ?></p>

<form method="POST" action="">
<?php
        // Utilizamos un bucle while para crear los campos de entrada.
        $contador = 1;
        while ($contador <= 12) {
            echo "<label for='mes$contador'>Mes $contador:</label>";
            echo "<input type='text' id='mes$contador' name='mes$contador' required><br>";
            $contador++;
        }
        ?>
        <input type="submit" value="Calcular cuánto has ahorrado">
</form>
</body>
</html>