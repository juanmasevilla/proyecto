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
            <img src="images/p4.jpg"/><br>
            PREGUNTA 4: ¿Donde se encuentra este monumento?<br>
            <?php
            $pagina = "p4";
            include("formulario_estandar.php")
            ?>
        </div>
    </body>
</html>
