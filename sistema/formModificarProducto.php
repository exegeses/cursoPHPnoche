<?php

    require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    require 'funciones/categorias.php';
    require 'funciones/productos.php';
    $marcas = listarMarcas();
    $categorias = listarCategorias();
    $producto = verProductoPorID();
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">

        <h1>Modificación de un producto</h1>

        <div class="alert alert-secondary p-8 col-8 mx-auto">
            <form action="modificarProducto.php" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="prdNombre">Nombre del Producto</label>
                    <input type="text" name="prdNombre" value="<?= $producto['prdNombre'] ?>" class="form-control" id="prdNombre" required>
                </div>

                <label for="prdPrecio">Precio del Producto</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">$</div>
                    </div>
                    <input type="number" name="prdPrecio"  value="<?= $producto['prdPrecio'] ?>"  class="form-control" id="prdPrecio" min="0" step="0.01" required>
                </div>

                <div class="form-group">
                    <label for="idMarca">Marca</label>
                    <select class="form-control" name="idMarca" id="idMarca" required>
                        <option value="<?= $producto['idMarca'] ?>"><?= $producto['mkNombre'] ?></option>
<?php
                while ( $marca = mysqli_fetch_assoc( $marcas ) ) {
?>                          
                        <option value="<?= $marca['idMarca'] ?>"><?= $marca['mkNombre'] ?></option>
<?php
                }
?>                        
                    </select>
                </div>

                <div class="form-group">
                    <label for="idCategoria">Categoría</label>
                    <select class="form-control" name="idCategoria" id="idCategoria" required>
                        <option value="<?= $producto['idCategoria'] ?>"><?= $producto['catNombre'] ?></option>
<?php
                while ( $categoria = mysqli_fetch_assoc($categorias) ) {
?>
                        <option value="<?= $categoria['idCategoria'] ?>"><?= $categoria['catNombre'] ?></option>
<?php
                }
?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="prdPresentacion">Presentación del Producto</label>
                    <textarea name="prdPresentacion"  class="form-control" id="prdPresentacion" required><?= $producto['prdPresentacion'] ?></textarea>
                </div>

                <div class="form-group">
                    <label for="prdStock">Stock del Producto</label>
                    <input type="number" name="prdStock"  value="<?= $producto['prdStock'] ?>"  class="form-control" id="prdStock" min="0" required>
                </div>

                <div class="form-group">
                    <label for="prdImagen">Imagen del Producto</label>
                    <br>
                    <img src="productos/<?= $producto['prdImagen'] ?>" class="img-thumbnail">
                    <input type="file" name="prdImagen" class="form-control-file" id="prdImagen">
                </div>

                <button class="btn btn-dark mr-3 px-4">Modificar producto</button>
                <a href="adminProductos.php" class="btn btn-outline-secondary">
                    Volver a panel de productos
                </a>

            </form>
        </div>
    </main>

<?php  include 'includes/footer.php';  ?>