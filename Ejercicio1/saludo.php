<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludo</title>
</head>
<body>
    <?php
    $palabra1 = $_GET['nombre'];
    $palabra2 = $_GET['apellido'];
    echo "¡ Hola $palabra1 $palabra2 !";
    ?>
</body>
</html>