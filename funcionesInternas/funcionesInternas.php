<?php
    // Funcion: es un bloque de codigo que sealiza alguna acción

    // redondea un numero al enterro mas cercano


    echo ceil(13.6) . "<br>";
    // count sirve para contar la cantidad de elementos dentro de un array
    $edades = [1,2,3,4,5];
    echo count($edades)."<br>";
    // die() y exit () : finalizan la ejecucion de un

    // echo

    //empty : valida si la variable está vacia
    $name = '';
    if(empty($name)){
        echo "está vacia";
    }else{
        echo "no está vacia";
    } // en este caso si está vacía


    //file_get_contents obtiene el contenido de un archivo
    //file_put_contents envia el contenido de la variable a un archivo
    $archivo = file_get_contents('archivo.txt');
    echo $archivo . "<br>";


    $contenido = 'Hola soy el contenido nuevo';
    file_put_contents('archivo.txt', $contenido);
    echo $contenido . "<br>";


    // getenv : regresa el valor de una variable de entorno
    $navegador = getenv('HTTP_USER_AGENT');
    echo $navegador . "<br>";// Mozilla/5.0 (X11; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/115.0


    // header : se utiliza para redirigir al usuario a otra pagina
    // header('Location: nueva-pagina.php');  lo dejo en comentario para quseguir trabajando


    include('index.php'); // carga el contenido de otro archivo dentro del sitio

    // con print_r : sirve para imprimir arrays y objetos en forma legible con echo no
    $balones = [1,2,3,4,5];
    print_r($balones)."<br>";

    
    //Rand : para generar numeros aleatorios
    echo rand(0, 100)."<br>";


    // str_replace : sirve para reemplazar un texto con otro
    $alumno = 'hola estudiante';
    echo str_replace('hola', 'gracias', $alumno)."<br>";


    // str_leng : devuelve la longitud de caracteres
    $univ = 'ABCDEF';
    echo strlen($univ); // 6


    // trim : se utiliza para limpiar espacios en blanco de un string al inicio o final
    $nombre = '    diego romero            !  ';
    echo trim($nombre)."<br>";


    // sprintf : es uno de los mas utilizados pues sirve para sustiruir textos, sirve para crear plantillas
    $ingerniero = 'El %s, especialista en %s, estudió en la universidad de %s!';
    echo sprintf($ingerniero, 'ingeniero', 'sistemas', 'los andes');
?>
