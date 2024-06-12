<?php

class Modelo extends Connection {

    public function getAllProductos() {
        $query = "SELECT * FROM `PRODUCTO`;";
        $result = mysqli_query($this->conn, $query);
        return $result;
    }

    public function showAllProducts() {
        $result = $this->getAllProductos();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='divTableRow'>
                <div class='divTableCell'>" . $row['PROD_NUM'] . "</div>
                <div class='divTableCell'>" . $row['DESCRIPCION'] . "</div>
                </div>";
            }
        } else {
            echo "0 resultados";
        }
    }

    public function getAllEmp() {
        $query = "SELECT `EMP_NO`, `APELLIDOS`, `SALARIO`, `DEPT_NO`, `FECHA_ALTA` FROM `EMP`;";
        $result = mysqli_query($this->conn, $query);
        return $result;
    }

    public function showAllEmp() {
        $result = $this->getAllEmp();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='divTableRow'>
                <div class='divTableCell'>" . $row['EMP_NO'] . "</div>
                <div class='divTableCell'>" . $row['APELLIDOS'] . "</div>
                
                <div class='divTableCell'>" . $this->fechaFormateada($row['FECHA_ALTA']) . "</div>
                <div class='divTableCell'>" . $this->formatoMoneda($row['SALARIO']) . "</div>
                </div>";
            }
        } else {
            echo "0 resultados";
        }
    }
    /*private function deepClase() {
        
        <div class='divTableCell'>" . $this->deepClase($row['DEPT_NO']) . "</div>
    
    }*/

    private function fechaFormateada($fecha){
        return date("d/m/y", strtotime($fecha)); 
    
    }

    private function formatoMoneda($salario){
        return number_format($salario, 2, ',', '.') . ' €';
    }

    // para hacer esta debería de hacer un nuevo script en el que meta un formulario? yo creo que si
    public function getAllCliente(){
        $query = "SELECT `CLIENTE_COD`, `NOMBRE`, `CIUDAD` FROM `CLIENTE` ORDER BY `NOMBRE` ASC";
        $result = mysqli_query($this->conn, $query);
        return $result;
    }

    public function showAllCliente(){
        $result = $this->getAllCliente();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='divClientes'>
                <div class='divTableCliente'>" . $row['CLIENTE_COD'] . "</div>
                <div class='divTableCliente'>" . $row['NOMBRE'] . "</div>
                <div class='divTableCliente'>" . $row['CIUDAD'] . "</div>
                </div>"; 
                
            }
        }
    }




// para hacer esta debería de hacer un nuevo script en el que meta un formulario? yo creo que si
/*   public function getPedidoOver($total){
        $query = "SELECT `PEDIDO_NUM`, `CLIENTE_COD`, `TOTAL` FROM `PEDIDO` WHERE `TOTAL` >= $total";
        $result = mysqli_query($this->conn, $query);
        return $result;
    }*/

    public function getPedidoOver(){
        $query = "SELECT `PEDIDO_NUM`, `CLIENTE_COD`, `TOTAL` FROM `PEDIDO`;";
        $result = mysqli_query($this->conn, $query);
        return $result;
    }

    public function showPedidoOver(){
        $result = $this->getPedidoOver(); 
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo "<div class='divPedidos'>
                <div class='divTablePedido'>" . $row['PEDIDO_NUM'] . "</div>
                <div class='divTablePedido'>" . $row['CLIENTE_COD'] . "</div>
                <div class='divTablePedido'>" . $row['TOTAL'] . "</div>
                </div>"; 
            }
        }
    }

}
?>
