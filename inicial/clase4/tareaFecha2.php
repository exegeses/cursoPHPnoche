<?php
    // almacenamos datos de la fecha en variables
    $diaSemana = date('w'); // dia de la semana 0-6
    $diaMes = date('d'); // día del mes 01-31
    $mes = date('n'); // numero mes 1-12
    $anio = date('Y'); // año actual

    $semana = [
                'Domingo', 'Lunes', 'Martes', 'Miércoles',
                'Jueves', 'Viernes', 'Sábado'
              ];
    $meses = [
                1=>'enero','febrero','marzo','abril',
                'mayo','junio','julio','agosto',
                'septiembre','octubre','noviembre','diciembre'
             ];

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tarea fecha resuelto - solución con arrays</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <h1>Tarea fecha resuelto - solución con arrays</h1>

    <?php
        echo 'Hoy es ', $semana[$diaSemana], ' ', $diaMes, ' de ', $meses[$mes], ' de ', $anio;
    ?>
    

</body>
</html>
