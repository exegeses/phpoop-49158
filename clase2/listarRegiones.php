<?php

    require '../config/config.php';
    ## conexion usando PDO
    $link = new PDO(
                'mysql:host=localhost;dbname=agencia',
                'root',
                'root'
            );
    // control de errores
    $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    // mensaje sql
    $sql = "SELECT regID, regNombre FROM regiones";

    // preparamos statement
    $stmt = $link->prepare($sql);
    // ejecutar
    $stmt->execute();

    #####################################
    #### traer datos: 2 métodos
    #### método fetch()
    #### método fetchALL()

   //$fila = $stmt->fetch(PDO::FETCH_ASSOC);
   //mostrar($fila);

    $regiones = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //mostrar($regiones);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <h1>Listado de regiones</h1>

    <ul>
<?php
        foreach ( $regiones as $region ) {
?>
        <li><?= $region['regID'] ?>: <?= $region['regNombre'] ?></li>
<?php
        }
?>
    </ul>

</body>
</html>