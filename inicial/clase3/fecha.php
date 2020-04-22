<?php
    date_default_timezone_set('America/Argentina/Buenos_Aires');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manual oficial de PHP - Trabajo con fecha</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <h1>Manual oficial de PHP - Trabajo con fecha</h1>

<?php
    ## guardamos en variables datos de la fecha
    $diaMes = date('d');
    $numeroMes = date('m');
    $anio = date('Y');
    echo 'La fecha es: ', $diaMes, '/', $numeroMes, '/', $anio;
?>
    <hr>
<?php
    $diaSemana = date('l');

    if( $diaSemana == 'Sunday' ){
        $diaSemana = 'Domingo';
    }
    else if( $diaSemana == 'Monday' ){
        $diaSemana = 'Lunes';
    }
    else if( $diaSemana == 'Tuesday' ){
        $diaSemana = 'Martes';
    }
    else if( $diaSemana == 'Wednesday' ){
        $diaSemana = 'Miércoles';
    }
    else if( $diaSemana == 'Thursday' ){
        $diaSemana = 'Jueves';
    }
    else if( $diaSemana == 'Friday' ){
        $diaSemana = 'Viernes';
    }
    else {
        $diaSemana = 'Sábado';
    }

    echo 'Hoy es: ', $diaSemana;
?>

    <hr>

<?php
    $diaSemana = date('l');

    switch ( $diaSemana ){
        case 'Sunday':
            echo 'Hoy es: Domingo';
            break;
        case 'Monday':
            echo 'Hoy es: Lunes';
            break;
        case 'Tuesday':
            echo 'Hoy es Martes';
            break;
        case 'Wednesday':
            echo 'Hoy es Miércoles';
            break;
        case 'Thursday':
            echo 'Hoy es Jueves';
            break;
        case 'Friday':
            echo 'Hoy es Viernes';
            break;
        default:
            echo 'Hoy es Sábado';
            break;
    }

    //echo 'Hoy es: ', $diaSemana;
?>

</body>
</html>