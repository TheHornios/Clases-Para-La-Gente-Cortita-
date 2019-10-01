<?php
    /* Rodrigo pascual Arnaiz */
    //Incluimos el Archvo Mostrar que tiene la funcion para mostrar la tabla y asi podemos adceder a los datos
    include("Mostrar.php");
    mostrarArrayBidimensional($banco);
    /* Esta  funcion devuelve un String con los datos de los empleados mas jovenes podiendo haber repetidos, 
       calculo con la funcion substr() saco los meses,dias y años y despues hago comparaciones empezando con el año
       despues con los meses y despues con los dias, con los que saco la persona con menor edad.
    */
    //Funcion cutre sin saber trabajar con MKTIME
    function masJoven($banco){
        echo "<h3>4º Quien es mas joven </h3>";
        $arrayFechaJoven = [];
        $arrayFechaJoven[0]=0;
        $arrayFechaJoven[1]=0;
        $arrayFechaJoven[2]=0;

        // Joven
        //Compruebo el año y guardo en el aaray en la primera posicion el año mas alto
        for($i = 0;$i<count($banco);$i++){
            if($arrayFechaJoven[0]<((int)substr($banco[$i][2],6))){
                $arrayFechaJoven[0] = ((int)substr($banco[$i][2],6));
            }
        }
        // Despues recorro el array teniendo encuanta que el cliente tenga el año mas alto y de los clientes mas altos
        // Saco el mes mas alto de ellos;
        for($i = 0;$i<count($banco);$i++){
            if($arrayFechaJoven[0]==((int)substr($banco[$i][2],6))){
                if($arrayFechaJoven[1]<((int)substr($banco[$i][2],3,2))){
                    $arrayFechaJoven[1] = ((int)substr($banco[$i][2],3,2));
                }
            }
        }
        // Con los dias compruebo que cliente tienen el mismo mes y año y saco el que tenga el dia mas alto 
        for($i = 0;$i<count($banco);$i++){
            if($arrayFechaJoven[0]==((int)substr($banco[$i][2],6))&&$arrayFechaJoven[1]==((int)substr($banco[$i][2],3,2))){
                if($arrayFechaJoven[2]<((int)substr($banco[$i][2],0,2))){
                    $arrayFechaJoven[2] = ((int)substr($banco[$i][2],0,2));
                }
            }
        }
        //Mostrar
        //Para comprobar que cliente es recorro el array y compruebo que clientes tienen la fecha que he ido guargando en las comparaciones anteriores  
        $textoJoven = " ";
        for($i = 0;$i<count($banco);$i++){
            if($arrayFechaJoven[0]==((int)substr($banco[$i][2],6))&&$arrayFechaJoven[1]==((int)substr($banco[$i][2],3,2))&&$arrayFechaJoven[2]==((int)substr($banco[$i][2],0,2))){
                $textoJoven .="<b> DNI: </b>".$banco[$i][0]." <b>Nombre: </b>".$banco[$i][1]." <b>Fecha Nac: </b>".$banco[$i][2]."<br/>";
            }
        }
        return $textoJoven;
    }
    echo "El Mas Mayor: <br/>".masJoven($banco);
?>