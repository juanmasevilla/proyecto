<?php

session_start();
session_name("concurso");
session_id();

function conexion_mysql() {
    $server_mysql = "localhost";
    $usuario_mysql = "pepe";
    $contraseña_mysql = "pepa";
    $c = mysql_connect($server_mysql, $usuario_mysql, $contraseña_mysql);
    return $c;
}

function conexion_database($c) {
    $database_mysql = "concursoQuiz";
    $db = mysql_select_db($database_mysql, $c);
    return $db;
}

function existe($usuario) {
    $existe = 'false';
    mysql_select_db(conexion_database(conexion_mysql()), conexion_mysql());
    $q1 = mysql_query("SELECT * FROM usuarios WHERE usuario='" . $usuario . "'", conexion_mysql());

    if (mysql_affected_rows(conexion_mysql()) == 1) {
        $existe = 'true';
    }
    return $existe;
}

function claveCorrecta($usu, $contra) {
    $correcto = 'false';
    mysql_select_db(conexion_database(conexion_mysql()), conexion_mysql());
    $q1 = mysql_query("SELECT * FROM usuarios WHERE usuario='" . $usu . "' AND clave='" . $contra . "'", conexion_mysql());
    if (mysql_affected_rows(conexion_mysql()) == 1) {
        $correcto = 'true';
    }
    return $correcto;
}

function insertar() {
    $insertado = 'false';
    $r1 = $_SESSION["r1"];
    $r2 = $_SESSION["r2"];
    $r3 = $_SESSION["r3"];
    $r4 = $_SESSION["r4"];
    $r5 = $_SESSION["r5"];
    $usuario = $_SESSION['usuario'];
    $tiempoTotal = $_SESSION['tiempoTotal'];
    $aciertos = $_SESSION['aciertos'];
    $fallos = $_SESSION['fallos'];
    echo $correctas.",".$incorrectas."<br>";
    $c = mysql_connect("localhost", "pepe", "pepa");
    mysql_select_db("concursoQuiz", $c);
    $consulta = "INSERT INTO respuestas(id, usuario, p1,p2,p3,p4,p5,tiempo,correctas,incorrectas) VALUES('null','".$usuario."','".$r1."','".$r2."','".$r3."','".$r4."','".$r5."','".$tiempoTotal."',".$aciertos.",".$fallos.")";
    if (mysql_query($consulta, $c)) {
        $insertado = "true";
    } else {
        echo mysql_errno($c) . ": " . mysql_error($c) . "\n";
    }
    return $insertado;
}

function mejores() {
                $c = mysql_connect("localhost", "pepe", "pepa");
    mysql_select_db("concursoQuiz", $c);
    if ($c) {
        if (mysql_select_db("concursoQuiz", $c)) {
            $q1 = mysql_query("SELECT distinct(usuario), correctas FROM respuestas
            ORDER BY correctas DESC, tiempo ASC
            LIMIT 5", conexion_mysql());
                        return $q1;
        }
    }
}

function insertarUs($usu, $pass){
    $insertado = 'false';
    $consulta = "INSERT INTO usuarios VALUES('".$usu."','".$pass."')";
    $c = conexion_mysql();
    conexion_database($c);
    if (mysql_query($consulta,$c)) {
        $insertado = 'true';
    }
    return $insertado;
}

?>