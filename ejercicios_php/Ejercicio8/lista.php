<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de la compra</title>
</head>
<body>
    <?php
    $nombre1 = $_GET['pera'];
    $nombre2 = $_GET['manzana'];
    $nombre3 = $_GET['melocoton'];
    $nombre4 = $_GET['sandia'];
    $nombre5 = $_GET['melon'];
    $nombre6 = $_GET['platano'];

    $array = array($nombre1, $nombre2, $nombre3, $nombre4, $nombre5, $nombre6);

    echo $array;
    ?>
</body>
</html>