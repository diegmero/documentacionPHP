<?php
    // vamos a crear mi primer funcion para comprender

   function saludo(){
    return 'Hola vaquero!, Bienvenido';
   }

   function nombre(){
    return 'diego';
   }

   // he creado dos funciones y estas me devuelven algo y podria escalarla
   $saludar = saludo() . " " . nombre();
   echo $saludar."<br>";


   // PODEMOS CAMBIAR EL RESULTADO DE UNA FUNCION
   /**
    * 
       @param float $cantidad;  //parametros importantes para documetnar el codigo
       @param string $moneda;
       @ return void
    */

    function cobrar(float $cantidad, string $moneda = 'MXN'){
        return 'hemos cobrado' . number_format($cantidad, 2) . ' ' . $moneda;
    }

    echo cobrar(10.25, 'USD');
?>