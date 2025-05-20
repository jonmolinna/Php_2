<?php
// 1. Enteros
$numero_positivo = 20;
$numero_negativo = -21;
$cero = 0;

echo $numero_positivo , " " , $numero_negativo;

// Verificar el tipo de dato
echo gettype($numero_positivo);
echo gettype($numero_negativo);

echo "<br>";

// 2. Float
$precio = 19.90;
$temperatura = -5.5;

echo $precio;
echo "<br>";
echo gettype($precio);


// 3. Strings
$saludo = "Hola Mundo";

// 4. Boolean
$es_verdad = true;
$es_falso = false;

echo "<br>";

var_dump($es_verdad); # es como el echo pero te imprime el tipo y su valor

?>