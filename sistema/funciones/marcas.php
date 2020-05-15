<?php

    ######### CRUD de marcas #########

    function listarMarcas()
    {
        $link = conectar();
        $sql = "SELECT idMarca, mkNombre
                    FROM marcas";
        $resultado = mysqli_query($link, $sql);
        return $resultado;
    }

    function agregarMarca()
    {
        $mkNombre = $_POST['mkNombre'];
        $link = conectar();
        $sql = "INSERT INTO marcas
                        ( mkNombre )
                    VALUE
                        ( '".$mkNombre."' )";
        $resultado =  mysqli_query($link, $sql);
        return $resultado;
    }

    function verMarcaPorID()
    {
        $idMarca = $_GET['idMarca'];
        $link = conectar();
        $sql = "SELECT idMarca, mkNombre
                    FROM marcas
                    WHERE idMarca = ".$idMarca;

        $resultado = mysqli_query($link, $sql)
                        or die(mysqli_error($link));
        $marca = mysqli_fetch_assoc($resultado);
        return $marca;
    }

    function modificarMarca()
    {
        $idMarca=$_POST['idMarca'];
        $mkNombre=$_POST['mkNombre'];
        $link = conectar();
        $sql = "UPDATE marcas 
                    SET mkNombre = '".$mkNombre."' 
                    WHERE idMarca = ".$idMarca;
        $resultado = mysqli_query($link, $sql)
                        or die(mysqli_error($link));
        return $resultado;
    }

    /*
     * listarMarcas()
     * verMarcaPorID()
     * agregarMarca()
     * modificarMarca()
     * eliminarMarca()
     * */