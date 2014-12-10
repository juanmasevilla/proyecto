<?php
require('modelo.php');
    
    $u=existe($_GET['usuario']);
    $c=claveCorrecta($_GET['usuario'], $_GET['clave']);
    echo $u;
    echo $c;
    
    if($u=='true' && $c=='true'){
        session_start();
        session_name('');
        session_id();
        $_SESSION['usuario'] = $_GET['usuario'];
        $_SESSION['clave'] = $_GET['clave'];
        $_SESSION['fallos']=0;
        $_SESSION['aciertos']=0;
        header('Location: vista2.php');
    }

?>