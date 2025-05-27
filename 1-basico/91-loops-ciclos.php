<?php

// 1. While

$k = 1;

while($k <= 6) {
    echo "<h{$k}>Encabezado {$k}</h{$k}>";
    $k++;
}

// 2. For
for ($m = 1; $m <= 6; $m++) {
   echo "<h{$m}>Encabezado {$m}</h{$m}>";
}

// 3. Foreach
$frutas = ["pera", "Manzana", "Fresas", "palta"];

echo "<ol>";

foreach($frutas as $fruta) {
    echo "<li>{$fruta}</li>";
}

echo "</ol>";

$countries = [
    "mx" => "Mexico",
    "ar" => "Argentina",
    "co" => "Colombia",
    "pe" => "peru",
    "es" => "España",
];

echo "<ol>";

foreach ($countries as $key=> $value) {
    echo "<li>{$key} - {$value}</li>";
}

echo "</ol>";


?>