<?php
    // perfil.php

    session_start();

    // verificando que el usuario sea un usuario verificadp
    if(!isset($_SESSION["verificado"]) && $_SESSION["verificado"] = true){
        header('Location: login.php');
        die;
    }


    //mensaje de bienvenida
    echo '<p>Bienvenido al perfil</p>';
    echo '<a href="logout.php">Cerrar seión</a>';
?>