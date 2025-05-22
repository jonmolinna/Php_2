<?php
    
    // 1. Estructuras de Condicion
    $age = 18;

    if ($age >= 18) {
        echo "Eres mayor de edad", "<br />";
    }
    else {
        echo "Eres menor de edad", "<br />";
    }

    if ($age >= 20):
        echo "Eres mayor de edad", "<br />";
    else:
        echo "Eres menor de edad", "<br />";
    endif;

    echo "<hr >";

    // 2. Switch - Case
    $mes = "5"; // Mayo

    switch($mes) {
        case 1:
            echo "El mes {$mes} es Enero";
            break;
        case 2:
            echo "El mes {$mes} es Febrero";
            break;
        case 3:
            echo "El mes {$mes} es Marzo";
            break;
        case 4:
            echo "El mes {$mes} es Abril";
            break;
        case 5: 
            echo "El mes {$mes} es Mayo";
            break;
        case 6:
            echo "El mes {$mes} es Junio";
            break;
        default:
            echo "El mes es invalido";
                break;
    }

    echo "<br />";

// Match
// A partir de php 8
$mes = 5;

$evaluar_mes = match($mes) {
    1 => "Enero",
    2 => "Febrero",
    3 => "Marzo",
    4 => "Abril",
    5 => "Mayo",
    6 => "JUnio",
    default => "Mes Invalida"
};

echo $evaluar_mes;

echo "<br />";

$hora = 7;

$evaluar_saludo = match(true) {
    ($hora <= 5) => "Dejame Dormir",
    ($hora >= 6 && $hora <= 11) => "Buenos Dias",
    ($hora >= 12 && $hora <= 18) => "Buenas Tardes",
    ($hora >= 19 && $hora <= 23) => "Buenas Noches",
    default => "Error la hora es invalida"
};

echo $evaluar_saludo;

echo "<br />";






?>