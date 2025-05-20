<?php

// Conversion de Tipos de Datos

// 1. Conversion Implicita
$entero = 5;
$flotante = 3.14;
$resultado = $entero + $flotante;

var_dump($resultado);

// 2. Conversion Explicita
$venta_cadena = "1099";
$venta_entero = intval($venta_cadena);

echo "<br>";
var_dump($venta_cadena);

echo "<br>";
var_dump($venta_entero);

// 3. Type Casting
$nota_1 = 9.5;
$nota_1_entero = (int)$nota_1;

echo "<br>";
var_dump($nota_1_entero); // 9




?>