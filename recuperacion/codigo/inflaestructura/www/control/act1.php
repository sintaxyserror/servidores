<!DOCTYPE html>
<html>
<head>
    <title>crustaceo</title>
</head>
<body>
    <h1>crustaceo</h1>
<?php 

$personas = ''; 

$resultado = ''; 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
    $personas = $_POST["personas"];

    if($personas > 200 && $personas <= 300){
        $resultado = $personas * 85; 
    }elseif($personas > 300){
        $resultado = $personas * 75;
    }else{
        $resultado = $personas * 95; 
    }

}
?>

<p><?php echo $resultado; ?></p>

<form method="POST" action="">
    <label for="guess">Introduce un número:</label>
    <input type="text" id="guess" name="personas" value="<?php echo $personas; ?>">
    <input type="submit" value="Submit">
</form>
</body>
</html>
