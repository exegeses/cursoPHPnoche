<?php
    require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    $chequeo = agregarMarca();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Alta de una nueva marca</h1>
<?php
    $class = 'danger';
    $mensaje = 'No se puedo agregar la marca enviada';
    if( $chequeo ){
        $class = 'success';
        $mensaje = 'Marca agregada correctamente';
    }
?>
    <div class="alert alert-<?= $class ?>">
        <?= $mensaje ?>
    </div>

    </main>

<?php  include 'includes/footer.php';  ?>