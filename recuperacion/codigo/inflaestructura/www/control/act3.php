<!DOCTYPE html>
<html>
<head>
    <title>precio del bus</title>
</head>
<body>
    <h1>precio del bus</h1>
<?php 

$alumnos = ""; 
$precio = ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $alumnos = $_POST["alumnos"];
     
    if($alumnos >= 100){
        $precio = $alumnos * 65; 
    }elseif($alumnos >=50 && $alumnos < 100){
        $precio = $alumnos * 70;
    }elseif($alumnos >=30 && $alumnos < 50){
        $precio = $alumnos * 95;
    }else{
        $precio = 4000; 
        echo "pedazo de pringado que va a pagar este pastizal por ir tan pocos" ; 
    }
    



   

}
?>

<p><?php echo $precio; ?></p>

<form method="POST" action="">
    <label for="guess">Introduce un número:</label>
    <input type="text" id="guess" name="alumnos" value="<?php echo $alumnos; ?>">

    <input type="submit" value="Submit">
</form>
</body>
</html>