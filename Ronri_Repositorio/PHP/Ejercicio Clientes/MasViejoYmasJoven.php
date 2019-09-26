<?php
    include("Mostrar.php");
    //Quien es mas viejo y joven  /// explode() list()
    function masJovenYviejo($banco){
        echo "<h3>4º Quien es mas viejo y joven </h3>";
        $arrayFechaJoven = [];
        $arrayFechaJoven[0]=0;
        $arrayFechaJoven[1]=0;
        $arrayFechaJoven[2]=0;

        $arrayFechaMasMayor = [];
        $arrayFechaMasMayor[0]=10000;
        $arrayFechaMasMayor[1]=10000;
        $arrayFechaMasMayor[2]=10000;
        // Joven
        for($i = 0;$i<count($banco);$i++){
            if($arrayFechaJoven[0]<((int)substr($banco[$i][2],6))){
                $arrayFechaJoven[0] = ((int)substr($banco[$i][2],6));
            }
        }
        for($i = 0;$i<count($banco);$i++){
            if($arrayFechaJoven[0]==((int)substr($banco[$i][2],6))){
                if($arrayFechaJoven[1]<((int)substr($banco[$i][2],3,2))){
                    $arrayFechaJoven[1] = ((int)substr($banco[$i][2],3,2));
                }
            }
        }
        for($i = 0;$i<count($banco);$i++){
            if($arrayFechaJoven[0]==((int)substr($banco[$i][2],6))&&$arrayFechaJoven[1]==((int)substr($banco[$i][2],3,2))){
                if($arrayFechaJoven[2]<((int)substr($banco[$i][2],0,2))){
                    $arrayFechaJoven[2] = ((int)substr($banco[$i][2],0,2));
                }
            }
        }
        // Mayor
        for($i = 0;$i<count($banco);$i++){
            if($arrayFechaMasMayor[0]>((int)substr($banco[$i][2],6))){
                $arrayFechaMasMayor[0] = ((int)substr($banco[$i][2],6));
            }
        }
        for($i = 0;$i<count($banco);$i++){
            if($arrayFechaMasMayor[0]==((int)substr($banco[$i][2],6))){
                if($arrayFechaMasMayor[1]>((int)substr($banco[$i][2],3,2))){
                    $arrayFechaMasMayor[1] = ((int)substr($banco[$i][2],3,2));
                }
            }
        }
        for($i = 0;$i<count($banco);$i++){
            if($arrayFechaMasMayor[0]==((int)substr($banco[$i][2],6))&&$arrayFechaMasMayor[1]==((int)substr($banco[$i][2],3,2))){
                if($arrayFechaMasMayor[2]>((int)substr($banco[$i][2],0,2))){
                    $arrayFechaMasMayor[2] = ((int)substr($banco[$i][2],0,2));
                }
            }
        }
        // Mostrar 
        $textoJoven = " ";
        $textoMayor = " ";
        for($i = 0;$i<count($banco);$i++){
            if($arrayFechaJoven[0]==((int)substr($banco[$i][2],6))&&$arrayFechaJoven[1]==((int)substr($banco[$i][2],3,2))&&$arrayFechaJoven[2]==((int)substr($banco[$i][2],0,2))){
                $textoJoven .="<b> DNI: </b>".$banco[$i][0]." <b>Nombre: </b>".$banco[$i][1]." <b>Fecha Nac: </b>".$banco[$i][2]."<br/>";
            }
            if($arrayFechaMasMayor[0]==((int)substr($banco[$i][2],6))&&$arrayFechaMasMayor[1]==((int)substr($banco[$i][2],3,2))&&$arrayFechaMasMayor[2]==((int)substr($banco[$i][2],0,2))){
                $textoMayor .="<b> DNI: </b>".$banco[$i][0]." <b>Nombre: </b>".$banco[$i][1]." <b>Fecha Nac: </b>".$banco[$i][2]."<br/>";
            }
        }
        echo "El Mas Joven: <br/>".$textoJoven;
        echo "El Mas Mayor: <br/>".$textoMayor;
    }

    masJovenYviejo($banco);
?>