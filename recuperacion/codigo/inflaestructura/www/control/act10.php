<!DOCTYPE html>
<html>
<head>
    <title>sueldo del trabajador</title>
</head>
<body>
    <h1>sueldo del trabajador</h1>
<?php 

$horas = ""; 
$sueldo = ""; 
$dia = 6;
$sueldoSemana = ""; 
$horasTrabajadas = ""; 
$sueldoMes = ""; 



if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $horas = $_POST['horas']; 
   $sueldo = $_POST['sueldo/horas'];
if($horas <=12){
   $sueldoSemana = $horas * $sueldo * $dia; 
   $horasTrabajadas = $horas * $dia; 
   $sueldoMes = $sueldoSemana * 4; 
}else{
    echo "estas loko o que? no vivas para trabajar melon"; 
}


}
?>

<p><?php echo "el sueldo del trabajador por una semana es: $sueldoSemana"; ?></p>
<p><?php echo "el sueldo del trabajador por una semana es: $sueldoMes"; ?></p>
<p><?php echo "las horas trabajadas en una semana es de: $horasTrabajadas";?></p>

<form method="POST" action="">
    <label for="guess">Introduce un número de horas:</label>
    <input type="text" id="guess" name="horas" value="">

    <label for="guess">Introduce un sueldo por hora:</label>
    <input type="text" id="guess" name="sueldo/horas" value="">



    <input type="submit" value="Submit">
</form>
</body>
</html>