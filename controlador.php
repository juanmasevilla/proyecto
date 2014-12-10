<?php

require('modelo.php');




if (isset($_GET['usuario']) == 'true' && isset($_GET['clave']) == 'true') {
    $u = existe($_GET['usuario']);
    $c = claveCorrecta($_GET['usuario'], $_GET['clave']);
    if ($u == 'true' && $c == 'true') {
        session_start();
        session_name('');
        session_id();
        $_SESSION['usuario'] = $_GET['usuario'];
        $_SESSION['clave'] = $_GET['clave'];
        $_SESSION['fallos'] = 0;
        $_SESSION['aciertos'] = 0;
        header('Location: vista2.php');
    }else if ($u == 'false'){
        header('Location: registro.php');
    }else if($u == 'true' && $c == 'false'){
        header('Location: vistaC.php');
    }
}
?>