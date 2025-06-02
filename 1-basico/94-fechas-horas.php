<?php

    echo "Manejo de Fechas y Horas";
    echo "<br />";

    echo time(); # 1748400214
    echo "<br />";

    echo date("d-m-y h:i:s"); #UTC 0 Londres
    echo "<br />";
    
    echo date_default_timezone_get(); # UTC
    echo "<br />";
    
    date_default_timezone_set("America/Lima");
    echo date("d-m-y h:i:s"); #27-05-25 09:53:55 Hora local
    
    echo "<br />";
    echo strtotime("now");

    echo "<br />";
    $now = strtotime("now");
    echo strtotime("d-m-y h:i:s", $now);


?>
