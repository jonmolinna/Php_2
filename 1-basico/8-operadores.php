<?php

// Tipos de Operadores

// 1. Operadores Aritmeticos
$numero_1 = 10;
$numero_2 = 5;

echo $numero_1 + $numero_2; // 15;
echo "<br />";

echo $numero_1 - $numero_2; // 5;
echo "<br />";

echo $numero_1 * $numero_2; // 50;
echo "<br />";

echo $numero_1 / $numero_2; // 2;
echo "<br />";

echo $numero_1 % $numero_2; // 0 residuo;
echo "<br />";

echo $numero_1 ** 2; // 100;

echo "<br />";
echo "<hr />";

// 2, Operadores de Asignacion
$number = 10;

echo $number += 5, "<br />"; // 15
echo $number -= 5, "<br />"; // 10
echo $number *= 5, "<br />"; // 50
echo $number /= 5, "<br />"; // 10
echo $number %= 5, "<br />"; // 0
echo $number **= 2, "<br />"; // 0

echo "<hr />";
// 3. Operadores de Concatenacion
$texto_1 = "Hola";
$texto_2 = "Mundo";

echo $texto_1 . $texto_2, "<br />"; // HolaMundo

$texto_1 .= " Mundo desde PHP";

echo $texto_1;

echo "<hr />";

// 4. Operadores de Comparacion
echo 5 == 5 ? "Verdadero" : "Falso", "<br />"; // Verdadero

echo 5 == "5" ? "Verdadero" : "Falso", "<br />"; // Verdadero

echo 5 === "5" ? "Verdadero" : "Falso", "<br />"; // Falso

echo 5 != 5 ? "Verdadero" : "Falso", "<br />"; // Falso - diferente

echo 4 <> 5 ? "Verdadero" : "Falso", "<br />"; // Verdadero - diferente

echo 5 !== "5" ? "Verdadero" : "Falso", "<br />"; // Verdadero - diferente

// <, >, <=, >=

var_dump(5 <=> 5); // 0; Ambos sin iguales
var_dump(5 <=> 4); // 1; izquierda es mayor a derecha
var_dump(4 <=> 5); // -1; izquierda es menor a derecha

echo "<hr />";

// 5. Operadores de Incremento y decremento
$incremento = 5;

++$incremento;
echo $incremento, "<br />"; // 6

$incremento++;
echo $incremento, "<br />"; // 7

$decremento = 10;

--$decremento;
echo $decremento, "<br />"; // 9

$decremento--;
echo $decremento, "<br />"; // 8


echo "<hr />";

// 6. Operadores Logicos
var_dump(4 < 5 && 5 < 6); // Verdadero => v and v
var_dump(14 < 5 || 5 < 6); // Verdader => f or v
var_dump(!true); // Falso;
var_dump(!false); // True;

echo "<hr />";

// 7. Operadores Ternarios ? y de Fusion Nulo ??
$age = 18;

$type_person = $age >= 18 ? "Mayor" : "Menor";

$name = "Jon";
$user = $name ?? "Invitado"; // si $name es numero pon lo Invitado


// 8. Operador de control de Errores @ es mejor trabajar con try catch
$archivo = @file("hola.txt");

?>