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
            <img src="images/p5.jpg"/><br>
            PREGUNTA 5: ¿Donde se encuentra este monumento?<br>
            <?php
            $pagina = "p5";
            include("formulario_estandar.php")
            ?>
        </div>
    </body>
</html>
