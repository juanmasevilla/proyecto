<?php include("controlador.php") ?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $titulo ?></title>
    </head>
    <body>
        <img src="p2.jpg" height="400" width="400"/><br>
        PREGUNTA 2: &#191;Donde se encuentra este monumento&#63;<br>
        <?php
        $pagina = "vista_p3.php";
        include("formulario_estandar.php")
        ?>
    </body>
</html>
