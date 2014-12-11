<?php
echo "RESULTADOS";
echo "<br>usuario: " . $_SESSION['usuario'];
$usuario = $_SESSION['usuario'];
echo "<br>correctas: " . $correctas;
echo "<br>incorrectas: " . $incorrectas;
echo "<br>PREGUNTA 1, RESPUESTA ".$_SESSION['p1']." C/I: ". $p1;
echo "<br>PREGUNTA 2, RESPUESTA ".$_SESSION['p2']." C/I: ". $p2;
echo "<br>PREGUNTA 3, RESPUESTA ".$_SESSION['p3']." C/I: ". $p3;
echo "<br>PREGUNTA 4, RESPUESTA ".$_SESSION['p4']." C/I: ". $p4;
echo "<br>PREGUNTA 5, RESPUESTA ".$_SESSION['p5']." C/I: ". $p5;
echo "<br>-----------<br>";
?>


//poner lo de arriba en html y hacer referencia a las variables de  $_SESSION['p1'] x ej, prA ello hay
q crear una sesion con 
session_start();
session_name('concurso');
session_id();

luego de mostrar eso llamar a la funcion saberMejores para ello hay q hacer un require de controlador.
