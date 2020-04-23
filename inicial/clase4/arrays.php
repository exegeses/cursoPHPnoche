<?php

    ## array ordenado por índice numérico

    $italianos = [
                    'Ferrari', 'Fiat', 'Lamborghini',
                    'Bugatti', 'Maseratti', 'Alfa Romeo',
                    'Pagani', 'Lancia'
                ];

    echo '<pre>';
    print_r($italianos);
    echo '</pre>';

    // asignación de índice numérico =>
    $italianos = [
                    8 => 'Ferrari', 'Fiat', 'Lamborghini',
                    15 => 'Bugatti', 'Maseratti', 'Alfa Romeo',
                    'Pagani', 'Lancia'
                  ];

    echo '<pre>';
    print_r($italianos);
    echo '</pre>';


    $celulares = [
                    'j5',
                    '11 pro',
                    'e6',
                    'Note7',
                    'Mi A3',
                    'Mate X',
                    '1100'
                ];

    echo '<pre>';
    print_r($celulares);
    echo '</pre>';

    // asignaciónde índice asociativo =>
    $celulares = [
                    'Samsung' => 'j5',
                    'iPhone'=>'11 pro',
                    'Motorola'=>'e6',
                    'Redmi'=>'Note7',
                    'Xiaomi'=>'Mi A3',
                    'Huawei'=>'Mate X',
                    'Nokia'=>'1100'
                ];

    echo '<pre>';
    print_r($celulares);
    echo '</pre>';


    echo $celulares['Motorola'];