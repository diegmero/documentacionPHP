<?php
    // Vamos a crear una sesion de usuario

    session_start();

    //si el usuario está verificado lo redirigimos al perfil.php
    if(isset($_SESSION["verificado"]) && $_SESSION["verificado"] == true) {
        header('Location: perfil.php');
        die;
    } 

    // se verifica si existe el parametro GET verificando y es igual a true

    if(isset($_GET["verificado"]) && $_GET["verificado"] == true) {
        $_SESSION["verificado"] = true;
        header('Location: perfil.php');
    };

    // si no está verificado le pedimos verificarse

    echo '<h3>Presiona el link para ingresar</h3>';
    echo '<a href="login.php?verificado=true">Verificar cuenta</a>'
?>