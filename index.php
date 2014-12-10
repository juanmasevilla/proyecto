<?php include("controlador.php") ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $titulo ?></title>
        <link href="./css/centrado.css" type="text/css" title="centrado" rel="stylesheet" />
    </head>
    <body>
        <form action="controlador.php" class="centrado" method="get">
            <input type="text" name="usuario"/>
            <input type="text" name="clave"/>
            <input type="submit"/>
        </form>
    </body>
</html>   