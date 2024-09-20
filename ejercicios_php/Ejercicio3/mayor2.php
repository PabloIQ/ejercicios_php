<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mayor que 3</title>
</head>
<body>
    <?php
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $num3 = $_GET['num3'];
    if ($num1 > $num2 && $num1 > $num3) {
        echo "El $num1 es el mayor";
    } elseif ($num1 > $num2 && $num3 > $num1) {
        echo "El $num3 es el mayor";
    } else {
        echo "El $num2 es el mayor";
    }
    ?>
</body>
</html>