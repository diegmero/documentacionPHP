<?php
    // creando cookie para guardar el nombre del usuario
    setcookie('username', 'edades', time() + 50);
    setcookie('miUser', 'edades');
    echo $_COOKIE['miUser'];  
    
    echo '<pre>';

    /**AQUI ESTOY CREANDO UNA SESION Y LUEGO LA VAMOS A VALIDAR QUE EXISTE */
    session_start();
    $_SESSION["token"] = 'abcde.13456';
    $_SESSION["token"] = 'diego romero';

    echo '<pre>';
    
    // AQUI ESTAMOS VALIDANDO QUE EXISTE
    if(isset($_SESSION["token"])){
        echo "el token registrado es: " . $_SESSION["token"];
    }else{
        echo "No existe la funcion que buscas";
    }

    //BORRANDO UNA VARIABLE DE SESION
    unset($_SESSION["token"]);

    session_destroy();

    echo $_SESSION["token"];
?>