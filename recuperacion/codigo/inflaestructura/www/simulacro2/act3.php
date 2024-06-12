<?php 

// Iniciar la sesión
session_start();

// Verificar si la variable de sesión "contador" está definida
if (isset($_SESSION['contador'])) {
    // Incrementar el contador en 1
    $_SESSION['contador'] += 1;
} else {
    // Inicializar la variable de sesión "contador" con el valor 1
    $_SESSION['contador'] = 1;
}

// Mostrar el valor del contador en la página
echo "El valor actual del contador es: " . $_SESSION['contador'];
?>




