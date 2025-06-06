<?php

// Creando Variables Globales
$name = "JOn Dallas";

function saludar()
{
    // echo "Hola ". $name; => sale error por que la variable $name no esta definida

    echo "Hola " . $GLOBALS['name'];
};

saludar();


// 1.  VARIABLES GLOBALES SERVER
// $_SERVER[$_COOKIE];

// 2. VARAIBLES REQUEST
// Ultimamente cayo su uso
// NO se recomienda usar
// $_REQUEST['name_query'];

// 3. VRAIBLES DE ENTORNO
// $_ENV["NAME_VARIABLE_ENTORNO"];


// 4. VARIABLES DE GET
echo "<h3> Detalle del Producto</h3>";

// isset -> evalua que el variable exista y que su valor no sea nulla


// http://localhost:9999/1-basico/96-super-globales.php?id=50

if (isset($_GET["id"])) {
    // htmlspecialchars -> no mande caracteres especiales (injeccion SQL)

    $product_id = htmlspecialchars($_GET["id"]);

    echo "<p>Mostrando la informacion para el producto con ID: " . $product_id . "</p>";
} else {
    echo "<p>No se especifico un ID de producto valido</p>";
}


// 4. VARIABLES DEL POST

// Verificando el metodo de la peticion
// NO uses isset para validar el formulario
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (!empty($_POST["username"]) && !empty($_POST["password"])) {
        $username = htmlspecialchars($_POST["username"]);
        $password = $_POST["password"];

        echo "<h3>Datos recibidos por POST</h3>";
        echo "<p>Usuario: {$username} </p>";
        echo "<p>Contraseña: {$password} </p>";
    } else {
        echo "<p>Por favor completa los campos del formulario</p>";
    }
}

?>

<!-- Para el uso del metodo POST -->
<h3>Iniciar Session</h3>
<form method="POST" action="96-super-globales.php"">
    <div>
        <label for=" usuario">Usuario:</label>
    <input type="text" id="usuario" name="username">
    </div>
    <div>
        <label for="constrasena">Contraseña:</label>
        <input type="password" id="constrasena" name="password">
    </div>
    <button type="submit">Entrar</button>
</form>

<?php
// 4. VARIABLES DE TIPO FILE
var_dump($_FILES);

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_FILES["file"])) {
    $archivo = $_FILES["file"];

    echo "<h3>Informacion del archivo subido:</h3>";

    if ($archivo["error"] === UPLOAD_ERR_OK) {
        $name_temporal = $archivo["tmp_name"];
        $name_original = $archivo["name"];
        $tamano = $archivo["size"];
        $tipo = $archivo["type"];

        echo "
                <ul>
                    <li>{$name_temporal}</li>
                    <li>{$name_original}</li>
                    <li>{$tamano}</li>
                    <li>{$tipo}</li>
                </ul>
            
            ";

        $directorio_subidos = "uploads/";

        // Verificando si existe el directorio
        if (!is_dir($directorio_subidos)) {
            // Crea una carpeta llamado upload y dale permiso de escritura y lectura
            mkdir($directorio_subidos, 0777, true);
        }

        $ruta_destino = $directorio_subidos . $name_original;

        // Si subio el Archivo
        if (move_uploaded_file($name_temporal, $ruta_destino)) {
            echo "<p style='color:green;'>El archivo: {$name_original} se ha subido con exito al servidor</p>";
        } else {
            echo "<p style='color:red;'>Error al subir el archivo: Codigo de error 1: {$archivo['error']}</p>";
        }
    } else {
        echo "<p style='color:red;'>Error al subir el archivo: Codigo de error 2: {$archivo['error']}</p>";
    }
}



?>

<h3>Subir archivos al Servidor</h3>
<form action="96-super-globales.php" method="POST" enctype="multipart/form-data">
    <div>
        <label for="file">Selecciona un archivo</label>
        <input type="file" name="file" id="file">
    </div>
    <button type="submit">Subir Archivo</button>
</form>

<?php

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

<form action="96-super-globales.php" method="POST">
    <label for="idioma">Selecciona idioma</label>
    <select name="idioma" id="idioma">
        <option value="" <?php echo ($idioma_preferido === "") ? "selected" : ""; ?>>---</option>
        <option value="es" <?php echo ($idioma_preferido === "es") ? "selected" : ""; ?>>Español</option>
        <option value="en" <?php echo ($idioma_preferido === "en") ? "selected" : ""; ?>>Español</option>
    </select>
    <button type="submit">Guardar Idioma</button>
</form>

<?php

if ($idioma_preferido === "es") {
    echo "<p>El idioma seleccionado es español</p>";
}
if ($idioma_preferido === "en") {
    echo "<p>The selected language es English</p>";
} else {
    echo "<p>Sin Seleccion de idioma / Without language selection</p>";
}

?>


<!-- SESSION -->