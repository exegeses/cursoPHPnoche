<?php

    function multiplicar( $n1, $n2 )
    {

        if( is_numeric( $n1 ) && is_numeric( $n2 ) ){
            $resultado = $n1 * $n2;
            return $resultado;
        }
        else{
            return 'ambos debe ser números';
        }
    }


    echo multiplicar(3, 9);

?>
<hr>
<?php
    function foo()
    {
        echo 'esto se lee';
        return;

        echo 'esto NO se lee';
    }


    foo();
?>