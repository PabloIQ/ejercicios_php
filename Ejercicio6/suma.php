<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma acumulativa</title>
</head>
<body>
    <?php
    $num = $_GET['suma'];
    for ($i = 1; $i <= $num; $i++) {
        echo $i + $i+1;
    }
    ?>
</body>
</html>