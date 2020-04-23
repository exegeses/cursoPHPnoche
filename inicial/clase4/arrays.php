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

    $italianos = [
                    8 => 'Ferrari', 'Fiat', 'Lamborghini',
                    15 => 'Bugatti', 'Maseratti', 'Alfa Romeo',
                    'Pagani', 'Lancia'
                  ];

    echo '<pre>';
    print_r($italianos);
    echo '</pre>';