<?php 
session_start(); 
// Inicia o reanuda la sesión para permitir el uso de variables de sesión.

if (!isset($_SESSION['nombre'])) { 
    // Comprueba si la variable de sesión 'nombre' no está definida.

    header('Location: login.php'); 
    // Redirige al usuario a la página de inicio de sesión (login.php).

    exit(); 
    // Detiene la ejecución del script para evitar que se procese más código después de la redirección.
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