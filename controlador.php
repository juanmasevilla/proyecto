<?php

require('modelo.php');
        session_start();
        session_name('');
        session_id();



if (isset($_GET['usuario']) == 'true' && isset($_GET['clave']) == 'true') {
    $u = existe($_GET['usuario']);
    $c = claveCorrecta($_GET['usuario'], $_GET['clave']);
    if ($u == 'true' && $c == 'true') {
        $_SESSION['usuario'] = $_GET['usuario'];
        $_SESSION['clave'] = $_GET['clave'];
        $_SESSION['fallos'] = 0;
        $_SESSION['aciertos'] = 0;
        header('Location: vista_p1.php');
    }else if ($u == 'false'){
        header('Location: registro.php');
    }else if($u == 'true' && $c == 'false'){
        header('Location: vistaC.php');
    }
}

if (isset($_GET['p1']) == 'true'){
    $_SESSION['p1'] = $_GET['p1'];
$_SESSION['r1']='i';
if ($_SESSION['p1'] == "MADRID") {
    $_SESSION['aciertos']++;
    $_SESSION['r1']='c';
} else {
    $_SESSION['fallos']++;
}
header('Location: vista_p2.php');
}

if (isset($_GET['p2']) == 'true'){
$_SESSION['p2'] = $_GET['p2'];
$_SESSION['r2']='i';
if ($_SESSION['p2'] == "NAVARRA") {
    $_SESSION['aciertos']++;
    $_SESSION['r2']='c';
} else {
    $_SESSION['fallos']++;
}
header('Location: vista_p3.php');
}

if (isset($_GET['p3']) == 'true'){
    $_SESSION['p3'] = $_GET['p3'];
$_SESSION['r3']='i';
if ($_SESSION['p3'] == "GALICIA") {
    $_SESSION['aciertos']++;
    $_SESSION['r3']='c';
} else {
    $_SESSION['fallos']++;
}
header('Location: vista_p4.php');
}

if (isset($_GET['p4']) == 'true'){
    $_SESSION['p4'] = $_GET['p4'];
$_SESSION['r4']='i';
if ($_SESSION['p4'] == "MURCIA") {
    $_SESSION['aciertos']++;
    $_SESSION['r4']='c';
} else {
    $_SESSION['fallos']++;
}
header('Location: vista_p5.php');
}

if (isset($_GET['p5']) == 'true'){
    $_SESSION['p5'] = $_GET['p5'];
$_SESSION['r5']='i';
if ($_SESSION['p5'] == "ANDALUCIA") {
    $_SESSION['aciertos']++;
    $_SESSION['r5']='c';
} else {
    $_SESSION['fallos']++;
}
header('Location: vista_final.php');
}

?>