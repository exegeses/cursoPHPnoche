<?php
    require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    $chequeo = modificarMarca();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Modificación de una marca</h1>
<?php
    $class = 'danger';
    $mensaje = 'No se puedo modificar la marca enviada';
    if( $chequeo ){
        $class = 'success';
        $mensaje = 'Marca modificada correctamente';
    }
?>
    <div class="alert alert-<?= $class ?>">
        <?= $mensaje ?>
    </div>

    </main>

<?php  include 'includes/footer.php';  ?>