<?php
    require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    $producto = verProductoPorID();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Confirmación de baja de un producto</h1>

        <article class="card col-6 border-danger text-danger mx-auto">
            <div class="row">
                <div class="col">
                    <img src="productos/noDisponible.jpg" class="img-thumbnail">
                </div>
                <div class="col">
                    <h2><?= $producto['prdNombre'] ?></h2>
                    Marca: <?= $producto['mkNombre'] ?>
                    <br>
                    Categoria: <?= $producto['catNombre'] ?>
                    <br>
                    Precio: <?= $producto['prdPrecio'] ?>
                    <br>
                    <form action="eliminarProducto.php" method="post">
                        <input type="hidden" name="idProducto" value="<?= $producto['idProducto'] ?>">
                        <button class="btn btn-danger btn-block my-2">
                            Confirmar baja
                        </button>
                        <a href="adminProductos.php" class="btn btn-outline-secondary btn-block my-2">
                            Volver a panel
                        </a>
                    </form>
                </div>
            </div>
        </article>

        <script>
            Swal.fire({
                title: '¿Desea eliminar el producto seleccionado?',
                text: "¡Esta acción no se puede deshacer!",
                type: 'warning',
                showCancelButton: true,
                cancelButtonColor: '#a5a4a4',
                cancelButtonText: 'No lo quiero eliminar',
                confirmButtonColor: '#d00',
                confirmButtonText: 'Si, lo quiero eliminar'
            }).then((result) => {
                if ( !result.value) {
                    //redirección a admin
                    window.location = 'adminProductos.php'
                }
            })
        </script>

    </main>

<?php  include 'includes/footer.php';  ?>