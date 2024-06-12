<!DOCTYPE html>
<html>
<head>
    <title>precio de lapices?</title>
</head>
<body>
    <h1>precio de lapices?</h1>
<?php 

$lapices = ''; 

$resultado = ''; 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
    $lapices = $_POST["lapices"];

    if($lapices < 1000){
      $resultado =  $lapices * 0.85; 
    }elseif($lapices >= 1000 ){
       $resultado = $lapices * 0.90; 
    }



}
?>

<p><?php echo $resultado; ?></p>

<form method="POST" action="">
    <label for="guess">Introduce un número:</label>
    <input type="text" id="lapices" name="lapices" value="<?php echo $lapices; ?>">
    <input type="submit" value="Submit">
</form>
</body>
</html>