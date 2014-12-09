<?php include("modelo.php"); ?>

<?php

function inicio() {
    $p=existe($_GET['usuario']);
    
    if ($p == 'true') {
        echo "el usuario existe";
    } else {
        echo "EL USUARIO NO EXISTE<br>";
        echo "<a href='" . $_SERVER['HTTP_REFERER'] . "'>VOLVER</a>";
    }
}

?>