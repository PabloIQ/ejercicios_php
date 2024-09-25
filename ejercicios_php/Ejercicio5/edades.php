<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edades</title>
</head>
<body>
    <?php
    $num = $_GET['edad'];
    if ($num >= 0 && $num < 12) {
        echo "Infante";
    } elseif ($num >= 12 && $num <= 17) {
        echo "Adolescente";
    } elseif ($num > 17 && $num <= 60) {
        echo "Adulto";
    } elseif ($num > 60) {
        echo "Anciano";
    } else {
        echo "Escriba su edad en número";
    }
    ?>
</body>
</html>