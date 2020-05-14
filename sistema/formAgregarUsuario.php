<?php
    require 'config/config.php';
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Alta de un nuevo usuario</h1>

        <div class="alert alert-secondary p-4 col-8 mx-auto">
            <form action="agregarUsuario.php" method="post">
                Nombre: <br>
                <input type="text" name="usuNombre" class="form-control" required>
                <br>
                Apellido: <br>
                <input type="text" name="usuApellido" class="form-control" required>
                <br>
                Email: <br>
                <input type="email" name="usuEmail" class="form-control" required>
                <br>
                Contraseña: <br>
                <input type="password" name="usuPass" class="form-control" required>
                <br>
                <button class="btn btn-dark mr-3 px-4">Agregar</button>
                <a href="adminUsuarios.php" class="btn btn-outline-secondary">
                    Volver a panel
                </a>
            </form>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>