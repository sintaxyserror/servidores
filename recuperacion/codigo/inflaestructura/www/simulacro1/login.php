<?php 
session_start(); 
// Inicia o reanuda la sesión para permitir el uso de variables de sesión.

if($_SERVER["REQUEST_METHOD"] == 'POST' && !empty($_POST['nombre'])) {
    // Comprueba si el formulario fue enviado por el método POST y si el campo 'nombre' no está vacío.

    $_SESSION['nombre'] = $_POST['nombre']; 
    // Asigna el valor del campo 'nombre' del formulario a una variable de sesión llamada 'nombre'.

    header('Location: index.php'); 
    // Redirige al usuario a la página 'index.php'.

    exit(); 
    // Detiene la ejecución del script para evitar que se procese más código después de la redirección.
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

