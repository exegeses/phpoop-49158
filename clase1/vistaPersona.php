<?php
    require 'Persona.php';
    $Persona = new Persona('Morty', 'Smith');

    //$Persona->setNombre('Rick');
    //$Persona->setApellido('Sánchez');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vista Persona</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <h1>Vista Persona</h1>
    <pre>
        <?php
            print_r($Persona)
        ?>
    </pre>
    
    <p class="objeto">
    <?= $Persona->verDatos() ?>
    </p>
</body>
</html>
