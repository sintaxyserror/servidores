<!DOCTYPE html>
<html>
<head>
    <title>media</title>
</head>
<body>
    <h1>media</h1>
<?php 

$numero1 = ""; 
$numero2 = ""; 
$numero3 = ""; 
$numero4 = ""; 
$numero5 = ""; 
$arr = []; 
$media = 0; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero1 = $_POST['numero1']; 
    $numero2 = $_POST['numero2']; 
    $numero3 = $_POST['numero3']; 
    $numero4 = $_POST['numero4']; 
    $numero5 = $_POST['numero5'];  

array_push($arr, $numero1, $numero2, $numero3, $numero4, $numero5);

var_dump($arr); 

for($x = 0; $x < 5; $x++){
    $media += $arr[$x] / 5; 
}

echo $media; 
 
}
?>



<form method="POST" action="">
    <label for="guess">Introduce cinco numeros:</label>
    <input type="text" id="guess" name="numero1" value="">
    <input type="text" id="guess" name="numero2" value="">
    <input type="text" id="guess" name="numero3" value="">
    <input type="text" id="guess" name="numero4" value="">
    <input type="text" id="guess" name="numero5" value="">
    <input type="submit" value="Submit">
</form>
</body>
</html>
