<?php

    //directiva de sesión
    session_start(); // si una sesion no existe, la crea | si existe, lo deja usar
    //registramos variables de sesion
    $_SESSION['nombre'] = 'Morty Smith';
    $_SESSION['numero'] = 555;