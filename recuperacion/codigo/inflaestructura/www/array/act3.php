<!DOCTYPE html>
<html>
<head>
    <title>media</title>
</head>
<body>
    <h1>media</h1>
<?php 

$contador = ""; 
$arr = []; 
$count= 0; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $contador = $_POST['contador']; 


while($count <= $contador){
    if($count % 2 !=0){
        array_push($arr, $count);
        var_dump($count); 
    }
    $count++;
}



}




?>



<form method="POST" action="">
    <label for="guess">Introduce cinco numeros:</label>
    <input type="text" id="guess" name="contador" value="">

    <input type="submit" value="Submit">
</form>
</body>
</html>