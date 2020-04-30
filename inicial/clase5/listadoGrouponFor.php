<?php
    $descripciones = ["Malla Apple Watch","Tour en bote", "Cedric, stand up show", "paseo en kayak", "cambio de aceite Midas", "Parking en el aeropuerto", "Spa con pileta", "Tobogan acuático"];
    $precios = [9.99, 30, 29.75, 79, 22, 10.50, 21, 29.99];
    $imagenes = ["apple-Watch", "bote", "cedric", "kayaks", "midas", "parking", "pileta", "tobogan"];

    $cantidad = count($descripciones);
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <hr>
    <main class="container">
        <h1>Ofertas de Groupon</h1>
        <div class="row">
<?php
        for( $n=0; $n < $cantidad; $n++){
?>
            <article class="card col-4 p-1">
                <img src="imagenesGroupon/<?= $imagenes[$n]; ?>.jpg" class="img-card-top">
                <div class="card-body">
                    <h2><?= $descripciones[$n]; ?></h2>
                    <span class="text-success lead">$<?= $precios[$n]; ?></span>
                </div>
            </article>
<?php
        }
?>

        </div>
    </main>
    <hr>
</body>
</html>
