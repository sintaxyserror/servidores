<?php

require_once "autoloader.php"; 
$connection = new Modelo();

$conn = $connection->getConn(); 

$connection-> showAllProducts();

$connection->showAllEmp();

$connection->showAllCliente(); 

$connection->showPedidoOver(); 







?>
