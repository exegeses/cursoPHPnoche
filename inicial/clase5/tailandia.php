<?php

	$locacion = [
	                "chinatown",
					"floating-market", 
					"hat-laem",
					"wat-arun",
					"khao-san-road",
					"ko-khai-beach",
					"kwai-river",
					"limestone",
					"longtail-boat",
					"maya-bay",
					"pra-nang",
					"rai-leh-beach",
					"rawai",
					"sirocco",
					"tuk-tuk",
					"wat-saket"
            ];
	$n = 0;
    $cantidad = count($locacion);
?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Listado de locaciones</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <h1>Tailandia - locaciones</h1>
        
        <div class="row">

<?php
    while ( $n < $cantidad ) {
?>
            <div class="card col-3 p-1">
                <img src="tailandia/<?= $locacion[$n] ?>.jpg" class="card-img-top">
                <div class="card-body">
                    <?= $locacion[$n]; ?>
                </div>
            </div>
<?php
        $n++;
    }
?>

        </div>
        
    </main>

</body>
</html>

