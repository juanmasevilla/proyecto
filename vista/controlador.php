<?php include("modelo.php")?>

<?php
$titulo="Concurso de preguntas";
function inicio() {
    if (existe($_GET['usuario'])) {
        if (claveCorrecta($_GET['usuario'], $_GET['clave']) == 'true') {
            session_start();
            session_name('concurso');
            session_id();
            $_SESSION['usuario'] = $_GET['usuario'];
            $_SESSION['clave'] = $_GET['clave'];
            $_SESSION['fallos'] = 0;
            $_SESSION['aciertos'] = 0;
            ?>
            <h1><a href='vista_p1.php?<?echo session_name()."=".session_id()?>'>
                    COMENZAR CONCURSO</A></h1>
            <?php
        } else {
            echo "EL USUARIO EXISTE PERO LA CLAVE ES INCORRECTA<BR>";
            echo "<a href='" . $_SERVER['HTTP_REFERER'] . "'>VOLVER</a>";
        }
    } else {
        echo "EL USUARIO NO EXISTE<br>";
        echo "<a href='" . $_SERVER['HTTP_REFERER'] . "'>VOLVER</a>";
    }
}
?>