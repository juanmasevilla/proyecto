<?php
require('modelo.php');
?>

<?php

function inicio() {
    if (existe($_GET['usuario']) == 'true') {
        echo "el usuario existe";
    } else {
        echo "EL USUARIO NO EXISTE<br>";
        echo "<a href='" . $_SERVER['HTTP_REFERER'] . "'>VOLVER</a>";
    }
}


?>