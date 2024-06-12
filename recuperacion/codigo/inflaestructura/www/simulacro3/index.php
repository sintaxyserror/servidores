<?php
session_start(); 


if(!isset($_SESSION['nombre'])) {
  //  header('Location: login.php'); 
    exit(); 
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
</head>
    <body>
        <h2>Bienvenido</h2>
        <p>Hola, <?php echo $_SESSION['nombre'];?> . !Bienvenido!</p>
        <a href="logout.php">Cerrar Sesióm</a>
    </body>
</html>