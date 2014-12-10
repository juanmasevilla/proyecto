<?php include("controlador.php") ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $titulo ?></title>
        <link href="./css/estilo.css" type="text/css" title="centrado" rel="stylesheet" />
    </head>
    <body>
        <div class="centrado">
            <img src="images/p1.jpg"/><!--No esta subida la imagen--><br>
            PREGUNTA 1: ¿Donde se encuentra este monumento?<br>
            <?php
            $pagina = "p1";
            include("formulario_estandar.php")
            ?>
        </div>
    </body>
</html>
