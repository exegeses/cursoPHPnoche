<?php
    require 'config/config.php';
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Alta de una nueva marca</h1>

        <div class="alert alert-secondary p-4 col-8 mx-auto">
            <form action="agregarMarca.php" method="post">
                Nombre de la marca: <br>
                <input type="text" name="mkNombre" class="form-control">
                <br>
                <button class="btn btn-dark mr-3 px-4">Agregar</button>
                <a href="adminMarcas.php" class="btn btn-outline-secondary">
                    Volver a panel
                </a>
            </form>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>