<?php
include('animal.php'); 
class Robot implements Locomocion{
    public $tipo;
    function __construct($tipo)
    {
        $this->tipo=$tipo;
    }
function emitirSonido($sonido){
    echo 'los robots tipo '.$this->tipo.' emiten sonido de '.$sonido;
}
function movimiento(){
    echo 'Su movimiento es propio de los robots '.$this->tipo;
}
}
$r2d2=new Robot('drone');
$r2d2->emitirSonido('aspas de vuelo');
$r2d2->movimiento();


?>