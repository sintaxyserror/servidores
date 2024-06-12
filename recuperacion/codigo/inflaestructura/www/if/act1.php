<!DOCTYPE html>
<html>
<head>
    <title>Que numero es mayor?</title>
</head>
<body>
    <h1>Que numero es mayor?</h1>
<?php 

$valor1 = ''; 
$valor2 = ''; 
$resultado = ''; 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
    $valor1 = $_POST["valor1"];
    $valor2 = $_POST["valor2"];

    if($valor1 < $valor2){
        $resultado = "$valor2 es mayor que $valor1";
    }elseif($valor1 == $valor2){
        $resultado = "$valor2 es igual que $valor1";
    }else{
        $resultado = "$valor1 es mayor que $valor2";
    }

}
?>

<p><?php echo $resultado; ?></p>

<form method="POST" action="">
    <label for="guess">Introduce un número:</label>
    <input type="text" id="guess" name="valor1" value="<?php echo $valor1; ?>">
    <input type="text" id="guess" name="valor2" value="<?php echo $valor2; ?>">
    <input type="submit" value="Submit">
</form>
</body>
</html>
