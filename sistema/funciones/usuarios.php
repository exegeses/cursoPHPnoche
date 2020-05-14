<?php

    ######### CRUD de usuarios #########

    function listarUsuarios()
    {
        $link = conectar();
        $sql = "SELECT idUsuario, usuNombre, usuApellido, usuEmail
                    FROM usuarios
                    WHERE usuEstado = 1";
        $resultado = mysqli_query($link, $sql);
        return $resultado;
    }


    function agregarUsuario()
    {
        $usuNombre = $_POST['usuNombre'];
        $usuApellido = $_POST['usuApellido'];
        $usuEmail = $_POST['usuEmail'];
        $usuPass = $_POST['usuPass'];

        $link = conectar();
        $sql = "INSERT INTO usuarios 
                    ( usuNombre, usuApellido, usuEmail, usuPass, usuEstado )
                    VALUE 
                    ( 
                        '".$usuNombre."', 
                        '".$usuApellido."', 
                        '".$usuEmail."', 
                        '".$usuPass."',
                        1 
                    )";
        $resultado = mysqli_query($link, $sql)
                        or die( mysqli_error($link) );
        return $resultado;
    }
    /*
     * listarUsuarios()
     * verUsuarioPorID()
     * agregarUsuario()
     * modificarUsuario()
     * eliminarUsuario()
     * */