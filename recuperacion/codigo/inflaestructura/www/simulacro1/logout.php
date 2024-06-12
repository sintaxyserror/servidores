<?php 
session_start(); 
// Inicia o reanuda la sesión para permitir el uso de variables de sesión.

session_unset(); 
// Elimina todas las variables de sesión.

session_destroy(); 
// Destruye toda la información registrada de una sesión.

header('Location: login.php'); 
// Redirige al usuario a la página de inicio de sesión (login.php).

exit(); 
// Detiene la ejecución del script para evitar que se procese más código después de la redirección.

?>