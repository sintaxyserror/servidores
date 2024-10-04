<?php 

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $codigoRespuesta = $_GET['codigo'];
    enviarRespuestaHTTP($codigoRespuesta);
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $codigoRespuesta = $_POST['codigo'];
    enviarRespuestaHTTP($codigoRespuesta);
    } else {
    http_response_code(405);
    echo "Código 405: Method Not Allowed - Solo se permiten solicitudes GET y POST.";
    }
    
    /*el cliente panda tres cosas, URL, cabecera y cuerpo. Si es un get mandara el cuerpo vacio y si es un post mandara el cuerpo lleno.*/


function enviarRespuestaHTTP($codigo){
    http_response_code($codigo);

    switch($codigo){
        case 200:
            echo "codigo 200: ok - La solicitud se proceso correctamente";
            break;
        case 201:
            echo "codigo 201: created - El recurso fue creado correctamente";
            break;
        case 300:
            echo "codigo 300: Multiple choices - Existen multiples opciones para este recurso";
            break;
        case 400:
            echo "codigo 400: Bad request - La solicitud no es correcta o no se pudo procesar";
            break;
        case 404: 
            echo "codigo 404: Not found - El recurso solicitado no se encuentro";
            break; 
            case 500:
                echo "Código 500: Internal Server Error - El servidor encontró un error.";
                break;
                default:
                echo "Código $codigo: Código de respuesta no implementado en este ejemplo.";
                break;
    }
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulario de envío de códigos de respuesta HTTP</title>
</head>
<body>
    <h1>Formulario de envío de códigos de respuesta HTTP</h1>
    <form action="ejercicio1.php" method="post">
        <label for="codigo">Código de respuesta HTTP:</label>
        <input type="number" id="codigo" name="codigo" min="100" max="599" required>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>









