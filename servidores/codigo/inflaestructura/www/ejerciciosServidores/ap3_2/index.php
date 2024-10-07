<?php
class DatabaseConnection {
    private static $instancia = null;  // Almacena la única instancia
    private $conexion;  // Almacena el objeto mysqli
    private $host = 'localhost';
    private $usuario = 'root';
    private $password = '';
    private $baseDeDatos = 'tarea_db';

    // Constructor privado para evitar la creación directa de nuevas instancias
    private function __construct() {
        $this->conexion = new mysqli($this->host, $this->usuario, $this->password, $this->baseDeDatos);

        // Verificar si la conexión fue exitosa
        if ($this->conexion->connect_error) {
            die("Error de conexión: " . $this->conexion->connect_error);
        }
    }

    // Método estático para obtener la única instancia de DatabaseConnection
    public static function getInstance() {
        if (self::$instancia === null) {
            self::$instancia = new DatabaseConnection();
        }
        return self::$instancia;
    }

    // Método para evitar la clonación del objeto
    private function __clone() {}

    // Método para evitar la deserialización
    private function __wakeup() {}

    // Método para obtener la conexión mysqli
    public function getConnection() {
        return $this->conexion;
    }


    // Método para cerrar la conexión 
    public function closeConnection() {
        $this->conexion->close();
    }


    // Método para obtener los datos de la tabla
    public function getDatos() {
        $sql = "SELECT * FROM datos";
        $resultado = $this->conexion->query($sql);
        $datos = array();
        if ($resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                $datos[] = $fila;
            }
        }
        return $datos;
    }

    
}

















?>