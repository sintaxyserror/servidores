<?php 

//aquí creo la clase traje con sus atributos. Uno de ellos es un estatico porque me interesa ir sumandolo desde aquí. 
class traje{
    private $tipoTraje;
    private $talla;
    private $estado;
    private $fechaIncorporacion;
    private $origen;
    static $cantidadTrajes = 0; //le pongo el valor cero para así poder sumarle 1 cada vez que se cree un objeto de la clase traje



    //ahora voy a crear su construcor
    public function __construct($tipoTraje, $talla, $estado, $fechaIncorporacion, $origen){
        $this->$tipoTraje = $tipoTraje;
        $this->talla = $talla;
        $this->estado = $estado;
        $this->fechaIncorporacion = $fechaIncorporacion;
        $this->origen = $origen;  
    }

    //ahora voy a crear los metodos get para los atributos

    public function getTipotraje(){
        return $this->tipoTraje;
    }

    public function getTalla(){
        return $this->talla;
    }
    public function getEstado(){
        return $this->estado;
    }
    public function getFechaIncorporacion(){
        return $this->fechaIncorporacion;
    }
    public function getOrigen(){
        return $this->origen;
    }


    //ahora voy a crear el metodo set del atributo estado ya que es el unico que puede cambiar. 
    public function setEstado($estado){
        $this->estado = $estado;
    }

    //metodo para mostrar lo que hay en el objeto
    public function toString(){
        return "Traje: ".$this->tipoTraje." Talla: ".$this->talla." Estado: ".$this->estado." Fecha de incorporación: ".$this->fechaIncorporacion." Origen: ".$this->origen;
    }
  
}

    // creo un objeto traje y compruebo que funciona. 
    $traje1 = new traje("traje de gala", "M", "nuevo", "2021-01-01", "donado");
    echo $traje1->toString();
    echo "<br>";
    



//creo la clase hijo de trajes 
class trajeGala extends traje{
    private $pantalon;
    private $camisa;
    private $chaleco;
    private $medias;

    //creo el contructor del hijo llamando al padre.
    public function __construct($tipoTraje, $talla, $estado, $fechaIncorporacion, $origen, $pantalon, $camisa, $chaleco, $medias){
        parent::__construct($tipoTraje, $talla, $estado, $fechaIncorporacion, $origen);
        $this->pantalon = $pantalon;
        $this->camisa = $camisa;
        $this->chaleco = $chaleco;
        $this->medias = $medias;
    }

    //creo los metodos get de los atributos del hijo.
    public function getPantalon(){
        return $this->pantalon;
    }
    public function getCamisa(){
        return $this->camisa;
    }
    public function getChaleco(){
        return $this->chaleco;
    }
    public function getMedias(){
        return $this->medias;
    }

    //como estos datos no cambian una vez ingresada la informacion del traje de gala no hace falta crear los seteres.

    //creo el metodo toString del hijo
    public function toStringHijo(){
        return parent::toString() ." Pantalon: ". $this->pantalon." Camisa: ".$this->camisa." Chaleco: ".$this->chaleco." medias: ".$this->medias;
    }
}

$trajeHijo = new trajeGala("traje de gala", "M", "nuevo", "2021-01-01", "donado", "pantalon", "camisa", "chaleco", "altas");
echo $trajeHijo->toStringHijo();

class trajeNormal extends traje{
    private $pantalon;
    private $camisa;
    private $chaleco;
    private $pañuelo;
    private $zapatillas;

    //creo el contructor del hijo llamando al padre.
    public function __construct($tipoTraje, $talla, $estado, $fechaIncorporacion, $origen, $pantalon, $camisa, $chaleco, $pañuelo, $zapatillas){
        parent::__construct($tipoTraje, $talla, $estado, $fechaIncorporacion, $origen);
        $this->pantalon = $pantalon;
        $this->camisa = $camisa;
        $this->chaleco = $chaleco;
        $this->pañuelo = $pañuelo;
        $this->zaptillas = $zapatillas;
    }

    //creo los metodos get de los atributos del hijo.
    public function getPantalon(){
        return $this->pantalon;
    }
    public function getCamisa(){
        return $this->camisa;
    }
    public function getChaleco(){
        return $this->chaleco;
    }
    public function getPañuelo(){
        return $this->pañuelo;
    }
    public function getZapatillas(){
        return $this->zapatillas;
    }

    //como estos datos no cambian una vez ingresada la informacion del traje de gala no hace falta crear los seteres.

    //creo el metodo toString del hijo
    public function toStringHijo(){
        return parent::toString() ." Pantalon: ". $this->pantalon." Camisa: ".$this->camisa." Chaleco: ".$this->chaleco." Pañuelo: ".$this->pañuelo." Zapatillas: ".$this->zapatillas;
    }

}
?>