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
$valor3 = ''; 
$resultado = ''; 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
    $valor1 = $_POST["valor1"];
    $valor2 = $_POST["valor2"];
    $valor3 = $_POST["valor3"];

    if($valor1 > $valor2 || $valor1 > $valor3){
        $resultado = "$valor1 es el mayor";
    }elseif($valor2 > $valor1 || $valor2 > $valor3){
        $resultado = "$valor2 es el mayor";
    }elseif($valor3 > $valor2 || $valor3 > $valor1){
        $resultado = "$valor3 es el mayor";
    }else{
        $resultado = "los valores no pueden ser iguales"; 
    }



}
?>

<p><?php echo $resultado; ?></p>

<form method="POST" action="">
    <label for="guess">Introduce un número:</label>
    <input type="text" id="guess" name="valor1" value="<?php echo $valor1; ?>">
    <input type="text" id="guess" name="valor2" value="<?php echo $valor2; ?>">
    <input type="text" id="guess" name="valor3" value="<?php echo $valor3; ?>">
    <input type="submit" value="Submit">
</form>
</body>
</html>