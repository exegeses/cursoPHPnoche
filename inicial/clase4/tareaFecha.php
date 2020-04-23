<?php
    // almacenamos datos de la fecha en variables
    $diaSemana = date('w'); // dia de la semana 0-6
    $diaMes = date('d'); // día del mes 01-31
    $mes = date('n'); // numero mes 1-12
    $anio = date('Y'); // año actual

    // averiguamos el día de la semana
    switch ($diaSemana){
        case 0:
            $diaSemana = 'Domingo';
            break;
        case 1:
            $diaSemana = 'Lunes';
            break;
        case 2:
            $diaSemana = 'Martes';
            break;
        case 3:
            $diaSemana = 'Miércoles';
            break;
        case 4:
            $diaSemana = 'Jueves';
            break;
        case 5:
            $diaSemana = 'Viernes';
            break;
        default:
            $diaSemana = 'Sábado';
            break;
    }

    switch ($mes){
        case 1:
            $mes = 'enero';
            break;
        case 2:
            $mes = 'febrero';
            break;
        case 3:
            $mes = 'marzo';
            break;
        case 4:
            $mes = 'abril';
            break;
        case 5:
            $mes = 'mayo';
            break;
        case 6:
            $mes = 'junio';
            break;
        case 7:
            $mes = 'julio';
            break;
        case 8:
            $mes = 'agosto';
            break;
        case 9:
            $mes = 'septiembre';
            break;
        case 10:
            $mes = 'octubre';
            break;
        case 11:
            $mes = 'noviembre';
            break;
        default:
            $mes = 'diciembre';
            break;
    }

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tarea fecha resuelto</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <h1>Tarea fecha resuelto</h1>

    <?php
        echo 'Hoy es ', $diaSemana, ' ', $diaMes, ' de ', $mes, ' de ', $anio;
    ?>
    

</body>
</html>
