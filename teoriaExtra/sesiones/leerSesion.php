<?php

    session_start();
    $nombre = $_SESSION['nombre'];
    echo 'Tu nombre es: ', $nombre;