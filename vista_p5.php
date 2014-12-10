<?php include("controlador.php") ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $titulo ?></title>
        <link href="./css/centrado.css" type="text/css" title="centrado" rel="stylesheet" />
    </head>
    <body>
        <div class="centrado">
            <img src="images/p5.jpg" height="400" width="400"/><br>
            PREGUNTA 5: &#191;Donde se encuentra este monumento&#63;<br>
            <?php
            $pagina = "p5";
            include("formulario_estandar.php")
            ?>
        </div>
    </body>
</html>
