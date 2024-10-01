<?php 

//Aqui tengo que poner los datos de la base a la que me quiero conectar
$server = "db"; 
$username = "root";
$password = "test";
$db = "AP1"; 


//aquí establezco la conexion a dicha base de datos
$conn = new mysqli($server, $username, $password, $db); 

//con este IF lo que estoy buscando es comprobar que efectivamente se ha hecho la conexion. 
if($conn->connect_error){
    die("conexion fallida" . $conn->connect_errno . "-->" . $conn->connect_error);

}else{
    echo "conexion establecida" . "<br>";
}

echo "__________________________________" . "<br>";
echo "<br>";

$sql = "SELECT * FROM usuarios"; 

$result = $conn->query($sql); 

if($result ->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "el ususario:" . $row["nombre"] . "posee la id:" . $row["id"] . "y su estado es:" . $row["estado"] ."<br>"; 
    }
}else{
    echo "tas comio un mojon que no hay nada"; 
}


?>