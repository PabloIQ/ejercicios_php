<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dias de la semana</title>
</head>
<body>
    <?php
        switch ($_GET['dia']) {
            case 1:
                echo "Es Lunes";
                break;
            case 2:
                echo "Es Martes";
                break;
            case 3:
                echo "Es Miercoles";
                break;
            case 4:
                echo "Es Jueves";
                break;
            case 5:
                echo "Es Viernes";
                break;
            case 6:
                echo "Es Sábado";
                break;
            case 7:
                echo "Es Domingo";
                break;
            default:
                echo "Escriba un número correcto";
                break;
        }
    ?>
</body>
</html>