<?php
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['nombre'])){
    $_SESSION['nombre'] = $_POST['nombre'];
    header('Location: index.php'); 
    exit(); 
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Sesion</title>
</head>
    <body>
        <h2>Iniciar Sesion</h2>
        <form method="post" action="">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre">
            <button type="submit">Iniciar Sesion</button>
        </form>
    </body>
</html>








