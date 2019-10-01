<?php
    /* Rodrigo pascual Arnaiz */
    //Incluimos el Archvo Mostrar que tiene la funcion para mostrar la tabla y asi podemos adceder a los datos
    include("Mostrar.php");
    mostrarArrayBidimensional($banco);
    /* Esta  funcion devuelve un String con los datos de los empleados mas Viejo podiendo haber repetidos, 
       calculo con la funcion substr() saco los meses,dias y años y despues hago comparaciones empezando con el año
       despues con los meses y despues con los dias, con los que saco la persona con mayor edad.
    */
    function masViejo($banco){
        echo "<h3>4º Quien es mas viejo</h3>";
        $arrayFechaMasMayor = [];
        $arrayFechaMasMayor[0]=10000;
        $arrayFechaMasMayor[1]=10000;
        $arrayFechaMasMayor[2]=10000;
        
        // Mayor
        //Compruebo el año y guardo en el aaray en la primera posicion el año mas bajo
        for($i = 0;$i<count($banco);$i++){
            if($arrayFechaMasMayor[0]>((int)substr($banco[$i][2],6))){
                $arrayFechaMasMayor[0] = ((int)substr($banco[$i][2],6));
            }
        }
        // Despues recorro el array teniendo encuanta que el cliente tenga el año mas alto y de los clientes mas bajo
        // Saco el mes mas alto de ellos;
        for($i = 0;$i<count($banco);$i++){
            if($arrayFechaMasMayor[0]==((int)substr($banco[$i][2],6))){
                if($arrayFechaMasMayor[1]>((int)substr($banco[$i][2],3,2))){
                    $arrayFechaMasMayor[1] = ((int)substr($banco[$i][2],3,2));
                }
            }
        }
        // Con los dias compruebo que cliente tienen el mismo mes y año y saco el que tenga el dia mas bajo 
        for($i = 0;$i<count($banco);$i++){
            if($arrayFechaMasMayor[0]==((int)substr($banco[$i][2],6))&&$arrayFechaMasMayor[1]==((int)substr($banco[$i][2],3,2))){
                if($arrayFechaMasMayor[2]>((int)substr($banco[$i][2],0,2))){
                    $arrayFechaMasMayor[2] = ((int)substr($banco[$i][2],0,2));
                }
            }
        }
        // Mostrar 
        //Para comprobar que cliente es recorro el array y compruebo que clientes tienen la fecha que he ido guargando en las comparaciones anteriores  
        $textoMayor = " ";
        for($i = 0;$i<count($banco);$i++){
            if($arrayFechaMasMayor[0]==((int)substr($banco[$i][2],6))&&$arrayFechaMasMayor[1]==((int)substr($banco[$i][2],3,2))&&$arrayFechaMasMayor[2]==((int)substr($banco[$i][2],0,2))){
                $textoMayor .="<b> DNI: </b>".$banco[$i][0]." <b>Nombre: </b>".$banco[$i][1]." <b>Fecha Nac: </b>".$banco[$i][2]."<br/>";
            }
        }
       return $textoMayor;
        
    }

    echo "El Mas Mayor: <br/>".masViejo($banco);
?>