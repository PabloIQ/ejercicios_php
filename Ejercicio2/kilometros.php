<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kilometros</title>
</head>
<body>
    <?php
    $num1 = $_GET['distancia'];
    $num2 = $_GET['velocidad'];
    $res = $num1 / $num2;
    echo "Tardará $res horas en llegar a su destino";
    ?>
</body>
</html>