<?php
    //en tiempo unix calculo el tiempo de vida que tengo restando al tiempo actual el año de nacimiento
    //despues divido el resultado entre 60 60 24 y 365.25
    // el resultado es la edad y lo redenodeamos 
    function edad($valor){
        list($d,$m,$y) = explode("/",$valor);
        if(checkdate($m,$d,$y)){
            $tiempoUnixFechanac = mktime(0,0,0,$m,$d,$y);
            $tiempoVidaUnix = time()-$tiempoUnixFechanac;

            $tiempoVidaUnix = $tiempoVidaUnix/60 /60 /24/365.25;

            return floor($tiempoVidaUnix);
        }else{
            return "fecha incorrecta";
        }
    }
    echo "Tu edad es: ".edad("02/12/2000");
?>