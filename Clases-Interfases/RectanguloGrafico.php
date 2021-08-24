 <?php 
include_once 'interfaceDibujable.php';

class RectanguloGrafico extends Rectangulo implements Dibujable
  {
    
	public function setPosicion($marginLeft,$marginTop){
     echo "El Rectangulo se encuentra posicionado a ". $marginLeft ." px del margen izquierdo y a " . $marginTop ." px del margen superior <br>";

	}

    public function dibujar($elemento){
    
      echo "Estas dibujando un Rectangulo con <b>".$elemento."</b>";

    }
	
}

?>