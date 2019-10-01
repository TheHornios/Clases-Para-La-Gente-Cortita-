<?php
    include("Mostrar.php");
    //Totalizar saldos por  cada una de las localidades 
    mostrarArrayBidimensional($banco);
    
    function saldosPorLocalidad($banco){
        echo "<h3>8º Totalizar saldos por  cada una de las localidades </h3>";
        $provinciasEsistentes = array();
        $provinciasEsistentes[] = strtoupper($banco[0][3]);
        for($i = 0;$i<count($banco);$i++){
            $anadir = true;
            for($x = 0;$x<count($provinciasEsistentes);$x++){
                if(strtoupper($banco[$i][3])==strtoupper($provinciasEsistentes[$x])){
                    $anadir  = false;
                }
            }
            if($anadir){
                $provinciasEsistentes[] = strtoupper($banco[$i][3]);
            }
        }
        for($i = 0;$i<count($provinciasEsistentes);$i++){
            $dinero = 0;
            for($x = 0;$x<count($banco);$x++){
                if(strtoupper($banco[$x][3])==$provinciasEsistentes[$i]){
                    $dinero += $banco[$x][4]; 
                }
            }
            echo "Dinero totalizado de: ".$provinciasEsistentes[$i]." es: ".$dinero."<br/>";
        }
    }
    saldosPorLocalidad($banco);
?>