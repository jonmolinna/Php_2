<?php
// 1 Arreglos Posicionales
// example => array(4) { [0]=> string(4) "Hola" [1]=> bool(false) [2]=> int(90) [3]=> string(5) "Adios" }
$array_posicional = array("Hola", false, 90, "Adios");

var_dump($array_posicional);

# imprimir su valores
echo "<br>";
echo $array_posicional[0];
echo "<br>";
echo $array_posicional[2];
echo "<br>";
echo count($array_posicional); # cuenta las posiciones

echo "<br>";

$array_colors = ["Rojo", "Verde", "Azul"];
var_dump($array_colors);
echo "<br>";

echo $array_colors[0];

echo "<br>";


// 2. Array Asociativo (typo JSON)
// Example array(3) { ["name"]=> string(3) "Jon" ["age"]=> int(28) ["country"]=> string(4) "Peru" }
$array_asociativo = [
    "name" => "Jon",
    "age" => 28,
    "country" => "Peru",
];

var_dump($array_asociativo);

echo "<br>";

# Imprime sus valores
echo $array_asociativo["name"];
echo "<br>";
echo count($array_asociativo);

$array_data = array(
    "name" => "Kendra",
    "lastName" => "Contreras",
    "country" => "Peru",
);


# Docs
# https://www.php.net/manual/es/ref.array.php

?>