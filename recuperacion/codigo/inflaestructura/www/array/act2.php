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
$arr1 = []; 
$arr2 = []; 
$arr3 = []; 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero1 = $_POST['numero1']; 
    $numero2 = $_POST['numero2']; 
    $numero3 = $_POST['numero3']; 
    $numero4 = $_POST['numero4']; 
    $numero5 = $_POST['numero5'];  

array_push($arr1, $numero1, $numero2, $numero3, $numero4, $numero5);
array_push($arr2, $numero1, $numero2, $numero3, $numero4, $numero5);

var_dump($arr1); 
var_dump($arr2); 

if(count($arr1) === count($arr2)){
   for($x = 0; $x < 5; $x++){
    $arr3 = $arr1[$x] * $arr2[$x];

    var_dump($arr3); 
   }
}else{
    echo "la longitud de los arrays no es igual"; 
}

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
