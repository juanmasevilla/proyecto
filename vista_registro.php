<?php include("controlador.php") ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $titulo ?></title>
        <link href="./css/estilo.css" type="text/css" title="css" rel="stylesheet" />
    </head>
    <body>
        <div class="centrado">
            <h1 class="horizontal">Registro</h1>
            <form action="controlador.php" method="get">
                <p class="derecha"><label for="Usuario">Usuario:</label> <input type="text" name="reg_usuario" id="Usuario"/></p>
                <p class="derecha"><label for="Contraseña">Contraseña:</label> <input type="password" id="Contraseña" name="reg_clave"/></p>
                <p class="horizontal"><input type="submit"/></p>
            </form>
        </div>
    </body>
</html>