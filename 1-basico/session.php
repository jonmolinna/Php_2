<?php
session_start();

var_dump($_SESSION);


echo "<h2>Contador de Visitas (Session)</h2>";

if (isset($_SESSION["visitas"])) {
    $_SESSION["visitas"]++;
} else {
    $_SESSION["visitas"] = 1;
}

echo "<p>Has visitado esta pagina " . $_SESSION['visitas'] . " veces en esta session.</p>";
echo "<p><a href='session.php'>Recargar la pagina</a></p>";
echo "<p><a href='destruir_session.php'>Cerrar session (Reiniciar el contador)</a></p>";


?>