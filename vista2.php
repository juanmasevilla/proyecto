<?php
        session_start();
        session_name('consurso');
        session_id();
        $_SESSION['tiempo1']=time();
        echo "Aciertos: ".$_SESSION['aciertos']."<br>";
        echo "Fallos: ".$_SESSION['fallos']."<br>";
?>
<html>
    <head>
    </head>
    <body>
        <img src="images/p1.jpg" height="400" width="400"/><br>
        PREGUNTA 1: &#191;Donde se encuentra este monumento&#63;<br>
        <form action="p2.php" method="get">
            <select name="p1">
                <option>MADRID</option>
                <option>ANDALUCIA</option>
                <option>NAVARRA</option>
                <option>MURCIA</option>
                <option>GALICIA</option>
            </select>
            <input type="submit" value="Siguiente"/>

        </form>
    </body>
</html>