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

    /*
     * listarProductos()
     * verProductoPorID()
     * agregarProducto()
     * modificarProducto()
     * eliminarProducto()
     * */