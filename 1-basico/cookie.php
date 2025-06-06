<?php

// SE ALMACENA EN EL LADO DEL CLIENTE

// COOKIES
echo "<h2>COOKIE</h2>";

$idioma_preferido = "";

if (isset($_POST["idioma"])) {
    $nuevo_idioma = $_POST["idioma"];

    if (in_array($nuevo_idioma, ["es", "en"])) {
        setcookie("idioma_usuario", $nuevo_idioma, time() +  (86400 * 30), "/");
        $idioma_preferido = $nuevo_idioma;

        echo "<p>Preferencia del idioma guardado como: {$nuevo_idioma}</p>";
    }
} else if (isset($_COOKIE["idioma_usuario"])) {
    $idioma_guardado = $_COOKIE["idioma_usuario"];

    if (in_array($idioma_guardado, ["es", "en"])) {
        $idioma_preferido = $idioma_guardado;
    }
}


?>

<form action="cookie.php" method="POST">
    <label for="idioma">Selecciona idioma</label>
    <select name="idioma" id="idioma">
        <option value="" <?php echo ($idioma_preferido === "") ? "selected" : ""; ?>>---</option>
        <option value="es" <?php echo ($idioma_preferido === "es") ? "selected" : ""; ?>>Español</option>
        <option value="en" <?php echo ($idioma_preferido === "en") ? "selected" : ""; ?>>English</option>
    </select>
    <button type="submit">Guardar Idioma</button>
</form>

<?php

if ($idioma_preferido === "es") {
    echo "<p>El idioma seleccionado es español</p>";
}
else if ($idioma_preferido === "en") {
    echo "<p>The selected language es English</p>";
} else {
    echo "<p>Sin Seleccion de idioma / Without language selection</p>";
}

?>