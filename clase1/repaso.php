<?php

    $x = 10;
    const MONEDA = 'usd';
    define('CURSO', 'PHP OOP');

    function foo()
    {
        return CURSO;
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1><?= CURSO ?></h1>

    <p>
        <?= foo() ?>
    </p>


</body>
</html>
