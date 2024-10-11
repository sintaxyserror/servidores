<?php
namespace AP3_2;    
class Controldor{
    public function index(){
        $modelo = new Tarea();
        $guardadoTarea = $modelo->verTareas();
        require_once './Vista/vista.php';
    }
}
