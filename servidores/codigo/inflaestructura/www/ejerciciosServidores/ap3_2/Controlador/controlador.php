<?php
class Controldor{
    public function index(){
        $modelo = new Tarea();
        $guardadoTarea = $modelo->verTareas();
    }
}