<?php
class Database {
    private static $instancia = null;  // Almacena la única instancia
    private $conexion;  // Almacena el objeto mysqli
    private $host = '172.19.0.2'; //para el host de este entorno que es el infraestructuras de docker puedo usar esta ip o los alias (db, inflaestructura-db-1, )
    private $usuario = 'root';
    private $password = 'test';
    private $bd = 'tareas_db';

    // Constructor privado para evitar la creación directa de nuevas instancias
    private function __construct() {
        $this->conexion = new mysqli($this->host, $this->usuario, $this->password, $this->bd);

        // Verificar si la conexión fue exitosa
        if ($this->conexion->connect_error) {
            die("Error de conexión: " . $this->conexion->connect_error);
        }
    }

    // Método estático para obtener la única instancia de Database
    public static function getInstance() {
        if (self::$instancia === null) {
            self::$instancia = new Database();
        }
        return self::$instancia;
    }

    // Método para evitar la clonación del objeto
    private function __clone() {}

    // Método para evitar la deserialización
    public function __wakeup() {} //en private me salta un warning y tengo que tenerlo en publico. 

    // Método para obtener la conexión mysqli
    public function getConnection() {
        return $this->conexion;
    }

    // Método para cerrar la conexión
    public function cerrarConexion(){
        $this->conexion->close();
    }
}

/*aqui pondre los metodos necesarios para la realizacion del ejercicio pero antes pongo un select para ver 
si he hecho bien la creacion de la base de datos */

















?>

