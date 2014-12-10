<?php
require_once('modelo.php');
?>

<?php

if(isset($_GET['usuario'])&&isset($_GET['clave'])){
    if (existe($_GET['usuario']) == 'true') {
        if(claveCorrecta($_GET['usuario'], $_GET['clave'])=='true'){
            header('Location: vista2.php');
                    session_start();
        session_name('concurso');
        session_id();
        $_SESSION['usuario'] = $_GET['usuario'];
        $_SESSION['clave'] = $_GET['clave'];
        $_SESSION['fallos']=0;
        $_SESSION['aciertos']=0;
        }
    }
}


?>