<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Condicionales</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <h1>Tarea condicionales</h1>

<?php
    $numero = $_POST['numero'];
    if( $numero < 100 ){
        echo '<img src="imagenes/ok.png">';
    }
    else{
        echo '<img src="imagenes/error.png">';
    }
?>


</body>
</html>
