<?php
// tipado fuerte
declare(strict_types=1);

    // Funciones
    function hola_mundo(): void {
        echo "<p>Hola Mundo</p>";
    }

    hola_mundo();
    echo "<br />";

    // Tipado fuerte
    function hola_todos(): string {
        return "Hola Todos";
    }

    // mixed => recibe cadenas, int, array, entre otros

    function sumar(int | float $a, mixed $b): int | float {
        return $a + $b;
    }

    echo sumar(10, 5);
    echo "<br />";

    function sumar2(int|float ...$numeros): int | float {
        $suma = 0;

        foreach($numeros as $numero) {
            $suma += $numero;
        }

        return $suma;
    }

    echo sumar2(1, 2, 3, 4, 5);
    echo "<br />";

    // Funciones Expresadas (Funciones dentro de variable)
    $restar = function ($a, $b) {
        return $a - $b;
    };

    echo $restar(10, 12);

    echo "<br />";

    // Funciones Anonimas
    // Map => trae un nuevo array
    $array_nums = [1, 2, 3, 4, 5];

    $array_cuadrados = array_map(function($n) {
        return $n * $n;
    }, $array_nums);

    var_dump($array_nums);
    echo "<br />";
    var_dump($array_cuadrados);
    echo "<br />";

    // Arrow Functions
    $arraw_nums = [1, 2, 3, 4];
    $arrow_cuadrado = array_map(fn($n) => $n * $n, $arraw_nums);

    var_dump($array_cuadrados);

    $arrow_restar = fn ($a, $b) => $a - $b;






?>