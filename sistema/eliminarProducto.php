<?php
    require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    $chequeo = eliminarProducto();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Baja de un producto</h1>
<?php
        $class = 'danger';
        $mensaje = 'No se puedo eliminar el producto enviado';
        if( $chequeo ){
            $class = 'success';
            $mensaje = 'Producto eliminado correctamente';
        }
?>
        <div class="alert alert-<?= $class ?>">
            <?= $mensaje ?>
            <a href="adminProductos.php" class="btn btn-oultine-secondary">
                volver a panel
            </a>
        </div>


    </main>

<?php  include 'includes/footer.php';  ?>