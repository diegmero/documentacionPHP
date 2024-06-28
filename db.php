<?php

//NOMBRE DE LA BASE DE DATOS: db_curso_php


$conexion = null;

try{
    // Datos para DSN Data source name

$engine = "mysql";
$host = "localhost";
$name = "db_curso_php";
$charset = "utf8";

//credenciales de acceso

$username = "root";
$password = "";

//para recibir excepciones en caso de errores
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC  // ingresando el atributo para que muestre el array asociativo solamente la informacion ya que antes mostraba los indices numericos y ya no se repite la informacion

];

// realizando la conexion

$dsn = sprintf("%s:host=%s;dbname=%s;charset=%s", $engine, $host, $name, $charset);
$conexion = new PDO($dsn, $username, $password, $options);

echo "La conexión se realizó con éxito ";

//declarando una variable y preparandola con el sql para mostrar los productos
$sentencia = $conexion->prepare("SELECT * FROM productos WHERE precio >= 100 AND oferta = 1");
$sentencia->execute(); // para ejecutar 
$resulatos = $sentencia->fetchAll(); // para que muestre los resultados de la anterior ejecucion

// aqui estare mostrando los nombres de los productos, estoy recorriendo o itinerando 
if(empty($resulatos)){
    echo "no hay productos";
}else{
    foreach ($resulatos as $producto){
    echo sprintf("<h1>%s</h1>", $producto["nombre"]);
    echo sprintf("<h4>%s</h4>", $producto["precio"]);
    echo sprintf("<h4>%s</h4>", date('d-M-Y h:i'), strtotime($producto["creado"]));
    echo $producto["oferta"] == 1 ? "En oferta" : "No está en oferta.";
    }
}
    
}catch (PDOException $e) {
    //utilizando el metodo getMesage para obtener el mensaje del error
    echo "Hubo un error en la conexión a la db" . $e->getMessage() ;

}

