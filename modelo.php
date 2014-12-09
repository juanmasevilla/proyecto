<?php

include 'controlador.php';

function existe($usuario) {
    $existe = false;
    $c = mysql_connect("localhost", "pepe", "pepa");
    mysql_select_db("concursoQuiz", $c);
    $q1 = mysql_query("SELECT * FROM usuarios WHERE usuario='" . $usuario . "'", $c);

    if (mysql_affected_rows($c) == 1) {
        $existe = true;
    }
    return $existe;
}

function claveCorrecta($usu, $contra) {
    $correcto = false;
    $c = mysql_connect("localhost", "pepe", "pepa");
    mysql_select_db("concursoQuiz", $c);
    $q1 = mysql_query("SELECT * FROM usuarios WHERE usuario='" . $usu . "' AND clave='" . $contra . "'", $c);
    if (mysql_affected_rows($c) == 1) {
        $correcto = true;
    }
    return $correcto;
}
?>
