<?php

    $ingleses = [
                    'Aston Martin',
                    'Jaguar',
                    'Bentley',
                    'Vauxhall',
                    'Rolls Royce',
                    'Lotus',
                    'Marcos',
                    'Land Rover',
                    'TVR'
                ];
    $n = 0; // inicio

    //echo $ingleses[0];
    /*
    $n = 0;
    echo '<ul>';
    while ( $n < 9 ){

        echo '<li>', $ingleses[$n], '</li>';
        $n++;
    }
    echo '</ul>';
    */
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bucles en PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <main class="container">

        <h1>Bucles en PHP</h1>

        <ul class="list-group">
<?php
        while ( $n < 9 ){
?>            
            <li class="list-group-item list-group-item-action">
                <?= $ingleses[$n]; ?>
            </li>
<?php
            $n++;
        }
?>            
        </ul>

    </main>
</body>
</html>