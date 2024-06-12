<!DOCTYPE html>
<html>
<head>
    <title>precio de los trajes</title>
</head>
<body>
    <h1>precio de los trajes</h1>
<?php 

$precio = ''; 

$descuento = ''; 

$precioFinal = ''; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
    $precio = $_POST["precio"];

    if($precio >= 2500){
        $descuento = ($precio / 100) * 15; 
        $precioFinal = $precio - $descuento;
    }elseif($precio < 2500){
        $descuento = ($precio / 100) * 8; 
        $precioFinal = $precio - $descuento;
    }




}
?>

<p><?php echo "el descuento de traje es: $descuento"; ?></p>
<p><?php echo "el precio final del traje es de: $precioFinal"; ?></p>

<form method="POST" action="">
    <label for="precio">Introduce un número:</label>
    <input type="text" id="precio" name="precio" value="<?php echo $precio; ?>">
    <input type="submit" value="Submit">
</form>
</body>
</html>