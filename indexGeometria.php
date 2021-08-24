<?php
include_once 'Clases-Interfases/Geometria.php';
include_once 'Clases-Interfases/Circulo.php';
include_once 'Clases-Interfases/Rectangulo.php';
include_once 'Clases-Interfases/CirculoGrafico.php';
include_once 'Clases-Interfases/RectanguloGrafico.php';


echo "<h2>Circulo</h2>";
echo "<p> Instancio dos circulos</p>";
$cir= new Circulo(5);
$circ= new Circulo(50);

echo "<p> Utilizo el método contar() de la clase </p>";
echo "devuelve: " . $circ->contar() ."<br>";

echo "<p> Utilizo el ultimo circulo instanciado, llamo al método getDiametro().  </p>";
echo "devuelve: " .$circ->getDiametro() . " valor pasado por parametro en la instancia <br>";

echo "<p> Llamo al método calcularPerimetro() de la clase </p>";
echo "devuelve: " . $circ->calcularPerimetro()."<br>";

echo "<p> Seteo el diametro del ultimo circulo instanciado de 50 a 10 </p>";
      $circ->setDiametro(10) ;

echo "<p> Llamo al método getDiametro()</p>";
echo "devuelve: " .$circ->getDiametro()."<br>";


echo "<h2>Rectangulo</h2>";
echo "<p> Instancio un Rectangulo</p>";
$rec= new Rectangulo(10,2);
echo "<p> Llamo al método calcularArea() de la clase </p>";
echo $rec->calcularArea() ."<br>";
//echo $rec->calcularPerimetro() ."<br>";

echo "<p> Utilizo el método contar() de la clase </p>";
echo $rec->contar() ."<br>";
//echo $rec->getBase() ."<br>";
echo "<p> Instancio otro rectangulo</p>";

$rectangulo= new Rectangulo(1,2);
echo "<p> vuelvo a llamar a el método contar() de la clase </p>";
echo $rectangulo->contar() ."<br>";
echo "<p> Llamo al método calcularPerimetro() de la clase </p>";
echo $rectangulo->calcularPerimetro() ."<br>";
echo "<br>";

echo "<h2>Circulo Grafico</h2>";
$circuloGrafico= new CirculoGrafico(15);
$circuloGrafico->setPosicion(10,80) ."<br>";
$circuloGrafico->dibujar("lapiz") ."<br>";
echo "<p> Llamo al método calcularPerimetro() heredado de su clase Padre Circulo</p>";
echo $circuloGrafico->calcularPerimetro() ."<br>";

echo "<h2>Rectangulo Grafico</h2>";

$rectanguloGrafico= new RectanguloGrafico(5,7);
$rectanguloGrafico->setPosicion(10,80) ."<br>";
$rectanguloGrafico->dibujar("crayon");
echo "<p> Llamo al método calcularArea() de la clase Padre</p>";
echo $rectanguloGrafico->calcularArea();



?>