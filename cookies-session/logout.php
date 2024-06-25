<?php
    //logout.php

    //se inicia con trabajo de sesiones
    session_start();

    session_destroy();

    header('Location: login.php');
    die;
?>