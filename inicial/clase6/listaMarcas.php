<?php
    ## código spaguetti - (archivo monolítico)
    $link = mysqli_connect(
                'localhost',
                'root',
                'root',
                'catalogoPHP'
    );

    $sql = "SELECT idMarca, mkNombre
                FROM marcas";
    $resultado = mysqli_query( $link, $sql );
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listado de marcas</title>
</head>
<body>
    <h1>Listado de marcas</h1>
<?php

    while( $marca = mysqli_fetch_assoc($resultado) ){

        echo $marca['idMarca'], ' ', $marca['mkNombre'], '<br>';

    }


?>

</body>
</html>
