<?php
namespace AP3_2;

$url = $_SERVER['REQUEST_URI'];
$url = parse_url($url, PHP_URL_PATH);
$urlParts = explode('/', trim($url, '/'));
var_dump($urlParts);
// Si no se proporciona un controlador, usa 'Controlador' por defecto
if (empty($urlParts[1])) {
    $urlParts[1] = 'Controlador';
}

$controller = ucfirst($urlParts[1]); // Capitaliza la primera letra
$action = $urlParts[2] ?? 'index'; // Acción por defecto es 'index'
$params = $urlParts[3] ?? null; // Parámetros opcionales

// Define la ruta del archivo del controlador
$controllerFile = __DIR__ . '/Controlador/controlador.php'; // Asegúrate que aquí sea correcto

// Verifica si el archivo del controlador existe
if (file_exists($controllerFile)) {
    require_once $controllerFile;

    $controllerClass = '\\Controlador\\' . $controller; // Usa el nombre del controlador

    // Verifica si la clase del controlador existe
    if (class_exists($controllerClass)) {
        $controllerObj = new $controllerClass();

        // Verifica si el método de la acción existe
        if (method_exists($controllerObj, $action)) {
            call_user_func([$controllerObj, $action], $params);
        } else {
            http_response_code(404);
            echo "Error 404: La acción '$action' no existe.<br>";
        }
    } else {
        http_response_code(404);
        echo "Error 404: El controlador '$controller' no existe.<br>";
    }
} else {
    http_response_code(404);
    echo "Error 404: El archivo del controlador '$controllerFile' no existe.<br>";
}




echo "Controlador: $controller<br>";
echo "Archivo del controlador: $controllerFile<br>";





?>






