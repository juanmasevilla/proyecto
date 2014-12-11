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
            <img src="images/p<?php echo $pagina ?>.jpg"/><br>
            PREGUNTA <?php echo $pagina ?>: ¿Donde se encuentra este monumento?<br>
            <form action="controlador.php" method="get">
                <select name="p<?php echo $pagina ?>">
                    <option>MADRID</option>
                    <option>ANDALUCIA</option>
                    <option>NAVARRA</option>
                    <option>MURCIA</option>
                    <option>GALICIA</option>
                </select>
                <input type="submit" value="Siguiente"/>
            </form>
        </div>
    </body>
</html>