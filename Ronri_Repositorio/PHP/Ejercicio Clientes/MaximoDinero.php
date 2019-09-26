<?php
    include("Mostrar.php");
    //Mostrar el maximo dinero
    function clienteMasDinero($banco){
        echo "<h3>2º Cliente con mas dinero</h3>";
        $posX = -1;
        $sueldoMax = 0;
        $arrayVariosMismoSueldo =[];
        
        for($i = 0;$i<count($banco);$i++){
            if($banco[$i][4]>$sueldoMax){
                $posX = $i;
                $sueldoMax = $banco[$i][4];
            }
        }

        echo "El sueldo maximo lo tiene: <br/>";
        for($i = 0;$i<count($banco);$i++){
            if($banco[$posX][4]==$banco[$i][4]){
                echo "<b> DNI: </b>".$banco[$i][0]." <b>Nombre: </b>".$banco[$i][1]." <b>Sueldo: </b>".$banco[$i][4]."<br/>";
            }
        }
    }

    clienteMasDinero($banco);
?>