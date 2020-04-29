<?php

    //declaración
    function bold( $frase )
    {
        echo '<b>', $frase, '</b><br>';
    }

    function duplicar( $numero )
    {
        $resultado = $numero * 2;
        return $resultado;
    }


    //invocación
    bold('PHP y mySQL');
    bold('funciones en PHP');
    bold( 50 );

    echo duplicar( 15 );
