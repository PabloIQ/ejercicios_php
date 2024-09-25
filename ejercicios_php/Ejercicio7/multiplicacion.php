<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplicación</title>
</head>
<body>
    <?php
    $num = $_GET['multiplicacion'];
    for ($i = 1; $i <= 10; $i++) {
        $res = $i * $num;
        echo "$i X $num = $res </br>"; 
    }
    ?>
</body>
</html>