<?php include("controlador.php") ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $titulo ?></title>
        <link href="./css/estilo.css" type="text/css" title="css" rel="stylesheet" />
    </head>
    <body>
        <form action="controlador.php" class="centrado" method="get">
            <p>Usuario: <input type="text" name="usuario"/></p>
            <p>Contraseña: <input type="text" name="clave"/></p>
            <input type="submit"/>
        </form>
    </body>
</html>