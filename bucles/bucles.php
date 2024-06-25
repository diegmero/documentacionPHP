<?php
        // los bucles son instrucicones repetitivas que se ejecutan mientras se cumpla una condicion


        // While: Si se cumple alguna condicion se ejecuta y termina el ciclo para seguir ejecutando el resto del programa
        $vueltas = 1;

        while($vueltas <= 10){
            echo "voy en la vuelta: $vueltas, <br> ";
            $vueltas ++;
        }


        // do while: "hacer si" instruccion que se ejecuta al menos una vez
        $giros = 1;

        do{
            echo "llevo $giros giro <br>";
            $giros++;
        }while($giros <= 10);



        // for: "desde" se utiliza dentro de la misma instruccion y se usa cuando sabemos que cantidad de repeticiones realizas
        $rondas = 1;

        for($rondas; $rondas <= 10; $rondas++){
            echo "llevo $rondas rondas <br>";
        }

        // forEach: es el mas utilizado para manejo de bases de datos, arrays y objetos

        $caja = [
            'peluche #1 se llama jorge y es de color marron',
            'peluche #2 se llama raul y es de color verde',
            'peluche #3 se llama diego y es de color amarillo',
            'peluche #4 se llama andres y es de color azul',
        ];

        // basicamente estamos recorriendo las posiciones e imprimiendo cada posicion
        foreach($caja as $peluche){
            echo "$peluche. <br>";
        }

        $muñeco = [
            ['nombre' => 'jorge', 'color' => 'marron'],
            ['nombre' => 'raul', 'color' => 'verce'],
            ['nombre' => 'diego', 'color' => 'amarillo'],
            ['nombre' => 'andres', 'color' => 'azul']
        ];

        // aqui estamos accediendo a las posiciones directamente del array asosiativo e mprimiendo junto con index que es la posicion :empiez aen 0 porque es el orden lógico en programacion
        foreach($muñeco as $index => $ternura){
            echo "<b>el muñeco # </b> " . $index . " de: " . $ternura['nombre'] . " es de color " . $ternura['color'] . "<br>";
        }


        // for Loop: hacemos uso cuando no queremos que se ejecute determinada iteracion utilizando continue para que no muestre en pantalla ese resultado.

        $edades = 1;
        for($edades = 1; $edades <= 10; $edades++){
            if($edades == 5){
                continue;
            }

            echo $edades . "<br>";
        }


        for($escuelas = 1; $escuelas <= 10; $escuelas++){
            if($escuelas==5){
                break;
            }
            echo $escuelas . "<br>";
        }
        echo "ha terminado el bucle";
?>