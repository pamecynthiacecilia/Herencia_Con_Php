<?php
class Rectangulo extends Geometria
{

public $base=0;
public $altura=0;
public static $contador=0;

   function __construct($base,$altura){
       $this->base=$base;
       $this->altura=$altura;
       self::$contador++; // :: permite acceder a  elementos estáticos, constantes
    }                     // self accede a metodos o propied dentro de una class

public function setBase($base){
  $this->base=$base;
 }
 public function getBase(){
  return $this->base;
 }
 public function setAltura($altura){
  $this->altura=$altura;
 }
 public function getAltura(){
  return $this->altura;
 }



public function contar(){
     $cuenta= self::$contador;
     return $cuenta;
  }

public function calcularPerimetro(){
    $resultado= ($this->base + $this->altura)*2 ;

    return $resultado;
  }

 public function calcularArea(){
         $resultado=($this->base * $this->altura);

    return $resultado;
  }


}
?>
