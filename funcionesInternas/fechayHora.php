<?php
    echo time()."<br>";  //mostrando en pantalla el tiempo actual desde UTC UNIX
    echo date('d/m/y h:i A') . "<br>"; // Muestra  la fecha actual


    // para validar un token que sea valido por 10 minutos a partir de la hora
    $caducidad = strtotime('+10 MIN');
    echo sprintf("ahorita es: %s\n", date('d/m/Y h:i A'));
    echo sprintf("token valido hasta %s", date('d/m/Y h:i A', $caducidad));
?>