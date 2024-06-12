<!DOCTYPE html>
<html>
<head>
    <title>numero par?</title>
</head>
<body>
    <h1>numero par?</h1>
<?php 

$valor1 = ''; 
$resultado = ''; 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
    $valor1 = $_POST["valor1"];

    if($valor1 < 0){
        $resultado = "$valor1 es un numero negativo";
 
    }else{
        $resultado = "$valor1 es un numero positivo";
    }

}
?>

<p><?php echo $resultado; ?></p>

<form method="POST" action="">
    <label for="guess">Introduce un número:</label>
    <input type="text" id="guess" name="valor1" value="<?php echo $valor1; ?>">
    <input type="submit" value="Submit">
</form>
</body>
</html>