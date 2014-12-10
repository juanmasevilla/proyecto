<?php include("controlador.php") ?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $titulo ?></title>
    </head>
    <body>
        <form action="vista.php" method="get">
            <input type="text" name="usuario"/>
            <input type="text" name="clave"/>
            <input type="submit"/>
        </form>
    </body>
</html>   