<!DOCTYPE html>
<html>
<head>
    <title>Que numero es mayor?</title>
</head>
<body>
    <h1>Que numero es mayor?</h1>
<?php 

$contador = 0; 
$suma = 0; 
$numero = ''; 


while($contador < 10) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {  
        $numero = $_POST['numero'];
        $suma += $numero;
        $contador++;
    }
}
?>

<p><?php echo $suma; ?></p>

<form method="POST" action="">
    <label for="guess">Introduce un número:</label>
    <input type="text" id="guess" name="valor" value="<?php echo $numero; ?>">
    <input type="submit" value="Submit">
</form>
</body>
</html>