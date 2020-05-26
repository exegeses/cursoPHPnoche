<?php

    session_start();
    unset($_SESSION['numero']);

    session_unset();
    session_destroy();