<!DOCTYPE html>
<html>
<head>
    <title>tu nota</title>
</head>
<body>
    <h1>tu nota</h1>

    <?php
    // Definimos el número a adivinar
    $miNota = 7;


    $nota = '';
    $mensaje = '';
    $mensaje2 = ''; 

    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $nota = $_POST["nota"];

        if (is_numeric($nota)) {
            if ($nota == $miNota) {
                $mensaje = "Felicidades, has sacado un: $miNota <br>";
            } elseif ($nota > 10) {
                $mensaje = "no puedes sacar mas de 10. No seas fantasma <br>";
            }elseif ($nota < $miNota) {
                $mensaje = "Prueba de nuevo. Tu nota es más ALTA <br>";
            } else {
                $mensaje = "Prueba de nuevo. Tu nota es más BAJA <br>";
            }
        } else {
            $mensaje = "Introduce un valor numérico. <br>";
        }
        if ($nota <= 4) {
            $mensaje2 = "$nota es un insuficiente <br>"; 
        } elseif ($nota == 5) {
            $mensaje2 = "$nota es un suficiente <br>"; 
        } elseif ($nota == 6) {
            $mensaje2 = "$nota es un bien <br>"; 
        } elseif ($nota == 7 || $nota == 8) {
            $mensaje2 = "$nota es un notable <br>"; 
        } elseif ($nota == 9) {
            $mensaje2 = "$nota es un sobresaliente <br>"; 
        } elseif ($nota == 10) {
            $mensaje2 = "$nota es un excelente <br>"; 
        } else {
            $mensaje2 = "La nota debe estar entre 0 y 10 <br>"; 
        }
        
    }

    ?>

    <p><?php echo $mensaje;
             echo $mensaje2; ?></p>

    <form method="POST" action="">
        <label for="guess">Introduce tu nota:</label>
        <input type="text" id="guess" name="nota" value="<?php echo $nota; ?>">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
  

   