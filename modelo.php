<?php

session_start();
session_name("concurso");
session_id();

function existe($usuario) {
    $existe = 'false';
    $c = mysql_connect("localhost", "pepe", "pepa");
    mysql_select_db("concursoQuiz", $c);
    $q1 = mysql_query("SELECT * FROM usuarios WHERE usuario='" . $usuario . "'", $c);

    if (mysql_affected_rows($c) == 1) {
        $existe = 'true';
    }
    return $existe;
}

function claveCorrecta($usu, $contra) {
    $correcto = 'false';
    $c = mysql_connect("localhost", "pepe", "pepa");
    mysql_select_db("concursoQuiz", $c);
    $q1 = mysql_query("SELECT * FROM usuarios WHERE usuario='" . $usu . "' AND clave='" . $contra . "'", $c);
    if (mysql_affected_rows($c) == 1) {
        $correcto = 'true';
    }
    return $correcto;
}

function insertar() {
    $insertado = "false";
    if ($c = mysql_connect("localhost", "pepe", "pepa")) {
        if (mysql_select_db("concursoQuiz", $c)) {
            if (mysql_query("INSERT respuestas (id,usuario, p1, p2, p3, p4, p5, tiempo, correctas, incorrectas) VALUES ('null','" . $usuario . "','" . $_SESSION['r1'] . "','" . $_SESSION['r2'] . "','" . $_SESSION['r3'] . "','" . $_SESSION['r4'] . "','" . $_SESSION['r5'] . "','" . $tiempoTotal . "', $correctas,$incorrectas)", $c)) {
                $insertado = "true";
                        echo "hola";
            }
        }
    }
    return $insertado;
}

function mejores() {
    if ($c = mysql_connect("localhost", "pepe", "pepa")) {
        if (mysql_select_db("concursoQuiz", $c)) {
            $q1 = mysql_query("SELECT distinct(usuario), correctas FROM respuestas
            ORDER BY correctas DESC, tiempo ASC
            LIMIT 5;", $c);
        }
    }
}

?>