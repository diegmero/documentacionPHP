
<?php
    //Aqui estoy creando una sesion
    session_start();
    $_SESSION["token"] = ["abcde.12345"];

echo $_SESSION();
?>
