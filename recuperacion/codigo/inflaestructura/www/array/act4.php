<!DOCTYPE html>
<html>
<head>
    <title>DNI</title>
</head>
<body>
    <h1>DNI</h1>
<?php 

$numero = ""; 
$dni = ['T','R','W','A','G','M','Y','F','P','D','X','B','N','J','Z','S','Q','V','H','L','C','K','E'];
$division = ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"]; 
    $division = $numero % 23;
    echo "el numero es: $numero y la letra es: $dni[$division]"; 


   
}




?>



<form method="POST" action="">
    <label for="guess">Introduce el numero de tu dni:</label>
    <input type="text" id="guess" name="numero" value="">

    <input type="submit" value="Submit">
</form>
</body>
</html>






