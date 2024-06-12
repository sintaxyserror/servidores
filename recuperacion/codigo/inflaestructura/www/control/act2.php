<!DOCTYPE html>
<html>
<head>
    <title>uvas</title>
</head>
<body>
    <h1>uvas</h1>
<?php 

$tipo = '';
$tamaño = ''; 
$resultado = ''; 
$precioUva = ''; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipo = $_POST["tipo"];
    $tamaño = $_POST["tamaño"];
    $precioUva = $_POST["precioUva"];

    if($tipo == "a" || $tipo == "A" && $tamaño == 1){
        $precioUva += 0.20; 
    }elseif($tipo =="a" || $tipo == "A" && $tamaño == 2){
        $precioUva += 0.30;
    } elseif($tipo == "b" || $tipo == "B" && $tamaño == 1){
        $precioUva -= 0.30; 
    }elseif($tipo == "b" || $tipo == "B" && $tamaño == 2){
        $precioUva -= 0.50; 
    }
    
    



   

}
?>

<p><?php echo $precioUva; ?></p>

<form method="POST" action="">
    <label for="guess">Introduce un número:</label>
    <input type="text" id="guess" name="tipo" value="<?php echo $tipo; ?>">
    <input type="text" id="guess" name="tamaño" value="<?php echo $tamaño; ?>">
    <input type="text" id="guess" name="precioUva" value="<?php echo $precioUva; ?>">
    <input type="submit" value="Submit">
</form>
</body>
</html>