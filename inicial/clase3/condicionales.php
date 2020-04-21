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

    <hr>

<?php
    $numero = $_POST['numero'];
    if( $numero < 100 ){
        $img = 'ok';
    }
    else{
        $img = 'error';
    }
?>
    <img src="imagenes/<?= $img ?>.png">

    <hr>
<?php
    $numero = $_POST['numero'];
    $img = 'error';
    if( $numero < 100 ){
        $img = 'ok';
    }
?>
    <img src="imagenes/<?= $img ?>.png">


</body>
</html>
