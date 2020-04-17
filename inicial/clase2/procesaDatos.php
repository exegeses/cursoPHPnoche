<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Proceso de datos</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <h1>Proceso de datos enviados por el form</h1>

<?php

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];

    echo 'Tu nombre es: ', $nombre;
    echo '<br>';
    echo 'Tu email es: ', $email;

?>    

</body>
</html>