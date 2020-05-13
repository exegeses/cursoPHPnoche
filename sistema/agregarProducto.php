<?php
    require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    $chequeo = agregarProducto();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Alta de un nuevo Producto</h1>
<?php
    $class = 'danger';
    $mensaje = 'No se puedo agregar el producto enviado';
    if( $chequeo ){
        $class = 'success';
        $mensaje = 'Producto agregado correctamente';
    }
?>
    <div class="alert alert-<?= $class ?>">
        <?= $mensaje ?>
    </div>

    </main>

<?php  include 'includes/footer.php';  ?>