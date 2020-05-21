<?php

    ######### CRUD de productos #########

    function listarProductos()
    {
        $link = conectar();
        $sql = "SELECT  
                        idProducto, prdNombre, prdPrecio,
                        p.idMarca, mkNombre, p.idCategoria, catNombre,
                        prdPresentacion, prdStock,
                        prdImagen
                    FROM 
                        productos p, marcas m, categorias c
                    WHERE
                        p.idMarca = m.idMarca
                     AND 
                        p.idCategoria = c.idCategoria";
        $resultado = mysqli_query( $link, $sql );
        return $resultado;
    }

    function subirArchivo()
    {
        $prdImagen = 'noDisponible.jpg'; // valor si no enviaron archivo en ALTA

        if( isset($_POST['originalImg']) ){ // si no enviaron archivo en MODICACION
            $prdImagen = $_POST['originalImg'];
        }

        // si está todo ok (si enviaron archivo)
        if( $_FILES['prdImagen']['error'] == 0 ){
            /* rutina para subir archivo renombrado con timestamp */
            $dir = 'productos/';
            $temp = $_FILES['prdImagen']['tmp_name'];
            $ext = pathinfo($_FILES['prdImagen']['name']);//info del archivo
            $prdImagen = time().'.'.$ext['extension']; //timestamp + extension

            move_uploaded_file($temp, $dir.$prdImagen);
        }

        return $prdImagen;
    }

    function agregarProducto()
    {
        #capturamos datos enviados por el form
        $prdNombre = $_POST['prdNombre'];
        $prdPrecio = $_POST['prdPrecio'];
        $idMarca = $_POST['idMarca'];
        $idCategoria = $_POST['idCategoria'];
        $prdPresentacion = $_POST['prdPresentacion'];
        $prdStock = $_POST['prdStock'];

        $prdImagen = subirArchivo();

        $link = conectar();
        $sql = "INSERT INTO productos 
                  VALUES
                     ( 
                        DEFAULT, 
                        '".$prdNombre."',
                        ".$prdPrecio.",
                        ".$idMarca.",
                        ".$idCategoria.",
                        '".$prdPresentacion."',
                        ".$prdStock.",
                        '".$prdImagen."'
                     )";

        $resultado = mysqli_query($link, $sql)
                            or die( mysqli_error($link) );
        return $resultado;
    }

    function verProductoPorID()
    {
        $idProducto = $_GET['idProducto'];
        $link = conectar();
        $sql = "SELECT  
                        idProducto, prdNombre, prdPrecio,
                        p.idMarca, mkNombre, p.idCategoria, catNombre,
                        prdPresentacion, prdStock,
                        prdImagen
                    FROM 
                        productos p, marcas m, categorias c
                    WHERE
                        p.idMarca = m.idMarca
                     AND 
                        p.idCategoria = c.idCategoria
                     AND 
                        p.idProducto = ".$idProducto;
        $resultado = mysqli_query($link, $sql)
                            or die( mysqli_error($link) );
        $producto = mysqli_fetch_assoc($resultado);
        return $producto;

    }

    function modificarProducto()
    {
        $idProducto = $_POST['idProducto'];
        $prdNombre = $_POST['prdNombre'];
        $prdPrecio = $_POST['prdPrecio'];
        $idMarca = $_POST['idMarca'];
        $idCategoria = $_POST['idCategoria'];
        $prdPresentacion = $_POST['prdPresentacion'];
        $prdStock = $_POST['prdStock'];
        $prdImagen = subirArchivo();

        $link = conectar();
        $sql = "UPDATE productos 
                    SET     
                            prdNombre = '".$prdNombre."',
							prdPrecio = ".$prdPrecio.",
							idMarca = ".$idMarca.",
							idCategoria = ".$idCategoria.",
							prdPresentacion = '".$prdPresentacion."',
							prdStock = ".$prdStock.",
							prdImagen = '".$prdImagen."'
				    WHERE 
				            idProducto = ".$idProducto;
        $resultado = mysqli_query($link, $sql)
                                or die(mysqli_error($link));
        return $resultado;
    }

    function eliminarProducto()
    {
        $idProducto = $_POST['idProducto'];
        $link = conectar();
        $sql = "DELETE FROM productos
                    WHERE idProducto = ".$idProducto;
        $resultado = mysqli_query($link, $sql)
                            or die(mysqli_error($link));
        return $resultado;
    }

    /*
     * listarProductos()
     * verProductoPorID()
     * agregarProducto()
     * modificarProducto()
     * eliminarProducto()
     * */
