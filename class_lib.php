<?php
//8.1==4.1
class ventas{
    var $numero;

    function __construct($numero){
        $this->numero = $numero;
    }

    function numero_varia(){
        return $this->numero;
    }
    
}
?>

<?php
//8.2==4.5
class numeroPar{
    var $cantidadUno;
    var $cantidadCeros;
    var $tamanoMatris;

    function __construct($cantidadUno, $cantidadCeros, $tamano){
        $this->cantidadUno = $cantidadUno;
        $this->cantidadCeros = $cantidadCeros;
        $this->tamanoMatris = $tamano;
    }

    public function dame_tamano(){
        return $this->tamanoMatris;
    }
}
?>

<?php
//8.3==4.2
class factoriales{
    var $factorial;

    function __construct($factorial){
        $this->factorial = $factorial;  
    }

    public function cual_factorial(){
        return $this->factorial;
    }
}
?>