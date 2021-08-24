<?php

class Circulo extends Geometria{

  protected $diametro=0;
  const PI=3.141592;
  public static $contador=0;

function __construct($diametro){
 
      $this->diametro=$diametro;

      self::$contador++;  
      
   
}
 
  

public function contar(){
     $cuenta= self::$contador;
     return $cuenta;
  }
  

   public function calcularArea(){
      $pi= self::PI;
        $resultado= $this->diametro * $pi;

        return $resultado;
  }

 public function calcularPerimetro(){
      $pi= self::PI;
    $resultado= $this->diametro * $pi ;

     return $resultado;
  }


}



?>