<?php

// Necesario para acceder a la session y destruirla
session_start();

// Eliminar todas la variables de session
$_SESSION = array();

// Verificando si existe el cookie
if (ini_get("sesion.use_cookies")) {
    $params = session_get_cookie_params();

    // Dando un valor negatico a la cookie para destruir
    setcookie(session_name(), "", time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
}


session_destroy();

echo "<p>Session cerrada. El contador se ha reiniciado, <a href='session.php'>Volver</a></p>";


?>