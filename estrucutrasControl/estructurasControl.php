<?php
    /** HEMOS INICIADO CON IF ELSE IF Y ELSE */
    $a = 15;
    $b = 15;

    if ($a > $b){
        echo "a es mayor b";
    }elseif ($a == $b){
        echo "Son igualitos";
    }else{
        echo "b es mayor que a";
    }
  
    echo '<pre>';
    /** AHORA VAMOS CON SWITCH */

    $edad = 28;
    $profesion = 'ingeniero';

    switch ($edad){
        case 28:
            echo "la edad es 28 años";
            break;
        case 10:
            echo "la edad es igual a 10";
            break;
        case 'miEdad':
            echo "escribiste miEdad";
        case 29:
            break;
            echo "tienes 29 años";
            break;
        default:
            echo "resultado predeterminado";
    }
    echo '<pre>';


    /** AHORA VAMOS CON LOS OPERADORES LOGICOS */

    $x = 10;
    $y = 10;
    $z = 20;

    if($x < $y && $y < $z){
        echo "Se cumplen las condiciones";
    }elseif($x > $y && $y < $z){
        echo "x es mayor que  y , pero y es menor que z";
    }else{
        echo "No hay un resultado valido";
    }

    echo '<pre>';

    if($x == $y || $y > $z){
        echo "Se cumple una de las condiciones";
    }

    echo '<pre>';

    $edad = false;

    if(!$edad){
        echo "Es falso";
    }else{
        echo "es verdadero";
    }

    echo '<pre>';

    /** AQUI ESTOY INGRESANDO PARA LAS VALIDACIONES EN CORREOS PUES 
     * ES IMPORTANTE AGREGAR FUNCIONES QUE NOS PERMITAN MEJORAR LA 
     * SEGURIDAD DE LOS FORMULARIOS EN EL INPUT EN ESTE CASO
    */

    $email1 = 'name@localhost.com';
    $email2 = 'name@localhost';

    if(filter_var($email1, FILTER_VALIDATE_EMAIL)) {
        echo "el correo $email1 es valido.\n";
    }else "el correo $email1 es rechazado por el sistema.\n";

    if(filter_var($email2, FILTER_VALIDATE_EMAIL)) {
        echo "el correo $email2 es valido.\n";
    }else "el correo $email2 es rechazado por el sistema.\n";
?>


