<?php

    // 1. INCLUDE
    // Si hay error no te permite ejecutar con el siguiente codigo (ERROR FATAL)
    include "./93-require-include/archivo.php";
    echo $variable;
    echo "<br />";

    echo $numero; #10
    echo "<br />";
    
    $numero++;
    
    echo $numero; #11
    echo "<br />";

    include "./93-require-include/archivo.php";
    echo $numero; # empieza de 10

    echo "<hr />";

    // 2, REQUIRE 
    // => si hay error no te deja ejecutar el siguiente codigo
    require "./93-require-include/archivo.php";
    echo $variable;
    echo "<br />";

    echo $numero; #10
    echo "<br />";
    
    $numero++;
    
    echo $numero; #11
    echo "<br />";

    require "./93-require-include/archivo.php";
    echo $numero; # empieza de 10

    echo "<hr />";

    // REQUIRE_ONCE y INCLUDE ONE es lo mismo
    require_once "./93-require-include/archivo.php";
    echo $variable;
    echo "<br />";

    echo $numero; #10
    echo "<br />";
    
    $numero++;
    
    echo $numero; #11
    echo "<br />";

    require_once "./93-require-include/archivo.php";
    echo $numero; # empieza de 11

?>