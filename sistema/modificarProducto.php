<?php
    require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    $chequeo = modificarProducto();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Modificación de un producto</h1>
<?php
    $class = 'danger';
    $mensaje = 'No se puedo modificar el producto enviado';
    if( $chequeo ){
        $class = 'success';
        $mensaje = 'Producto modificado correctamente';
    }
?>
    <div class="alert alert-<?= $class ?>">
        <?= $mensaje ?>
    </div>

    </main>

<?php  include 'includes/footer.php';  ?>