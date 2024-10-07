<?php

class Tarea{
    private $conn; 
    private $table = "tareas";

    public function __construct($db){
        $this->conn = $db;
    }

    function insertarTarea($titulo, $descripcion, $estado){ //aqui pongo los parametros que le voy a pasar al metodo
        $db1 = Database::getInstance(); //aqui llamo a la clase Database y al metodo getInstance
        $conn = $db1->getConnection(); //aqui llamo al metodo getConnection de la clase Database
        $añadir = $conn->query('INSERT INTO tareas (titulo, descripcion, estado) VALUES ("'.$titulo.'", "'.$descripcion.'", "'.$estado.'")'); //aqui hago la query para insertar los datos en la tabla tareas
        if($añadir === TRUE){ //aqui compruebo si la query se ha ejecutado correctamente
            echo "Tarea añadida correctamente"; //si se ha ejecutado correctamente me muestra este mensaje
        }else{ //si no se ha ejecutado correctamente me muestra el error
            echo "Error: " . $añadir . "<br>" . $conn->error;  
        }
        $conn = $db1->cerrarConexion(); //cierro la conexion
    }
    
    function borrarTarea($id){ //aqui pongo los parametros que le voy a pasar al metodo
        $db1 = Database::getInstance(); //aqui llamo a la clase Database y al metodo getInstance
        $conn = $db1->getConnection(); //aqui llamo al metodo getConnection de la clase Database
        $borrar = $conn->query('DELETE FROM tareas WHERE id = "'.$id.'"'); //aqui hago la query para borrar los datos de la tabla tareas
        if($borrar === TRUE){ //aqui compruebo si la query se ha ejecutado correctamente
            echo "Tarea borrada correctamente"; //si se ha ejecutado correctamente me muestra este mensaje
        }else{ //si no se ha ejecutado correctamente me muestra el error
            echo "Error: " . $borrar . "<br>" . $conn->error;
        }
     
        $conn = $db1->cerrarConexion(); //cierro la conexion
    }
    
    function modificarTarea($id, $titulo, $descripcion, $estado){ //aqui pongo los parametros que le voy a pasar al metodo
        $db1 = Database::getInstance(); //aqui llamo a la clase Database y al metodo getInstance
        $conn = $db1->getConnection(); //aqui llamo al metodo getConnection de la clase Database
        $modificar = $conn->query('UPDATE tareas SET titulo = "'.$titulo.'", descripcion = "'.$descripcion.'", estado = "'.$estado.'" WHERE id = "'.$id.'"'); //aqui hago la query para modificar los datos de la tabla tareas
        if($modificar === TRUE){ //aqui compruebo si la query se ha ejecutado correctamente
            echo "Tarea modificada correctamente"; //si se ha ejecutado correctamente me muestra este mensaje
        }else{ //si no se ha ejecutado correctamente me muestra el error
            echo "Error: " . $modificar . "<br>" . $conn->error; 
        }
        $conn = $db1->cerrarConexion(); //cierro la conexion
    }

    function verTareas(){
        $db1 = Database::getInstance(); //aqui llamo a la clase Database y al metodo getInstance
        $conn = $db1->getConnection(); //aqui llamo al metodo getConnection de la clase Database
        $sql = "SELECT * FROM tareas"; //aqui hago la query para ver los datos de la tabla tareas
        $result = $conn->query($sql); //aqui guardo el resultado de la query en una variable
        if($result ->num_rows > 0){ //aqui compruebo si la query se ha ejecutado correctamente
            while($row = $result->fetch_assoc()){ //aqui hago un bucle para que me muestre todos los datos de la tabla
                echo "la tarea:" . $row["titulo"] . "tiene la descripcion:" . $row["descripcion"] . "y su estado es:" . $row["estado"] ."<br>"; //aqui muestro los datos de la tabla
            }
        }else{ //si no se ha ejecutado correctamente me muestra el error
            echo "tas comio un mojon que no hay nada"; 
        }
        $conn = $db1->cerrarConexion(); //cierro la conexion
    }
}

?>