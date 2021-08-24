<?php
      include_once 'interfaceDibujable.php';

   class CirculoGrafico extends Circulo implements Dibujable
  {
	/*
	el constructor de la clase padre es heredado por defecto 
	function __construct($diametro){
		parent::__construct($diametro);
	}*/
    
	public function setPosicion($marginLeft,$marginTop){
     echo "El Circulo se encuentra posicionado a ". $marginLeft ." px del margen izquierdo y a " . $marginTop ." px del margen superior <br>";

	}

    public function dibujar($elemento){
    
      echo "Estas dibujando un Circulo con <b>".$elemento."</b>";

    }
	
}
?>