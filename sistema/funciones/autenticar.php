<?php

    ###### auth | autenticar

    function login()
    {
        $usuEmail = $_POST['usuEmail'];
        $usuPass = $_POST['usuPass'];
        $link = conectar();
        $sql = "SELECT usuNombre, usuApellido
                    FROM usuarios
                    WHERE usuEmail  = '".$usuEmail."'
                      AND usuPass   = '".$usuPass."'";
        $resultado = mysqli_query( $link, $sql )
                            or die( mysqli_error($link) );
        $cantidad = mysqli_num_rows( $resultado );
        if( $cantidad == 0 ){ // se logueó mal
            //redirección a formLogin
            header('location: formLogin.php?error=1');
        }
        else{ // se logueó bien
            ## rutina de autenticación
            $_SESSION['login'] = 1;
            $datosUsuario = mysqli_fetch_assoc($resultado);
            $_SESSION['usuNombre'] = $datosUsuario['usuNombre'];
            $_SESSION['usuApellido'] = $datosUsuario['usuApellido'];
            //redireción a admin
            header('location: admin.php');
        }
    }

    function logout()
    {
        session_unset(); //elimina todas las variables de sesión
        session_destroy();

        //redirección con delay
        header( 'refresh:3;url=index.php');
    }

    function autenticar()
    {
        //si no está logueado
        if( !isset($_SESSION['login']) ){
            header('location: formLogin.php?error=2');
        }
    }