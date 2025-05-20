<?php
//1. Variables
// Las variables se puede cambiar
$nombre_completo = "Jon Molina";

echo "<p>$nombre_completo</p>";

//2. Constantes
// Las constantes no cambian
define("SUPER_PASSWORD", "1234M"); # vieja escuela
echo "<p>" . SUPER_PASSWORD . "</p>";

// Nueva escuela a partir de php 7
const SUPER_USER = "jonmircha";
echo "<p>" . SUPER_USER . "</p>";

//3. Variables Globales
// Documentacion: Superglobals
// $GLOBALS
// $_SERVER
// $_GET
// $_POST
// $_FILES
// $_COOKIE
// $_SESSION
// $_REQUEST
// $_ENV
echo $_SERVER["DOCUMENT_ROOT"];

echo "<br/>";

//4. Constantes Magicas
// Documentacion: Magic constants 
echo __FILE__;


?>

